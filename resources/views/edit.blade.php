<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.7 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Buku</h2><br/>
      <form method="post" action="{{action('BookController@update', $id)}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Judul">Judul buku:</label>
            <input type="text" class="form-control" name="Judul" value="{{$book->Judul}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Penerbit">Penerbit:</label>
              <input type="text" class="form-control" name="Penerbit" value="{{$book->Penerbit}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Tahun_Terbit">Tahun Terbit:</label>
            <input type="text" class="form-control" name="Tahun_Terbit" value="{{$book->Tahun_Terbit}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Pengarang">Pengarang:</label>
            <input type="text" class="form-control" name="Pengarang" value="{{$book->Pengarang}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>