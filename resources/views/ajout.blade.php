@extends("layout/template")
<h1>Ajouter un article au blog</h1></br></br>

@section("contenu")
<div class="container">
  <form method="post" action="/add" enctype="multipart/form-data">
@csrf
     <small class="help-block"><?php echo $errors->first('titre')?></small>
     <input value="" id="titre" style="width:50%;" type="text" name="titre" placeholder="titre" class="form-control col-md-5"/></br>

     <small class="help-block"><?php echo $errors->first('image')?></small>
     <input id="image" style="width:50%;"  type="file" name="image" class="form-control col-md-8"/></br>

     <small class="help-block"><?php echo $errors->first('text')?></small>
     <textarea value="" cols="50" rows="8" class="form-control" name="text" id="text"></textarea></br>


     <input type="submit" value="valider" class="btn btn-primary" id="valider"/>
 </form>
</div>

    {{$uri ?? ''}}
    @endsection
