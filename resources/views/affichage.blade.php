@extends("layout/template")

    @section("contenu")
     <h1>SieBlog</h1>
     <hr/>

    <div class="articles container-fluid">
        @foreach($a as $val)
            <div class='article'>
             <div class='article-block'>
                 <img src="{{$val->url_image}}" class='article-image'/></div><br/><br/><br/>
                 <div class='article-title'>{{$val->title}}</div><br/><br/>
                 <div class='article-content'>{{$val->content}}</div>
             </div>
           </div>
        @endforeach

    </div>
   @endsection
