<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;


class controller1 extends Controller
{

    public function getForm()
    {
        $a = Post::all();
        return view('affichage',compact('a'));
    }

    public function getFormAdd()
    {
        return view("ajout");
    }


    public function postFormAdd(Request $request)
    {
        $requirements = [
            "titre" => ['required', 'max:255'],
            "image" => 'required',
            "text" => 'required',
        ];

        $messages = [
            "image.image" => "Upload an image please!",
            "titre.required" => "This field is required"
        ];

        Validator::make($request->all(), $requirements, $messages)->validate();

        $image = $request->file("image");

        $location = config('images.path');
        $extension = $request->file("image")->getClientOriginalExtension();
        do {
            $nom = rand() . '.' . $extension;
        } while(file_exists($location . '/' . $nom));


        $uri = $location.'/'.$nom;

       if($image->move(config('images.path'), $nom)) {
            $article = [
                "title" => $request->input('titre'),
                 "url_image" => $uri,
                "content" => $request->input('text'),
            ];
            Post::create($article);
            return redirect("/");
           // return view("ajout", compact("uri"));
            //}
        }
    }
}
