-g
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Tambah Buku Baru</h2><br/>
      <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Judul">Judul buku:</label>
            <input type="text" class="form-control" name="Judul">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Penerbit">Penerbit:</label>
              <input type="text" class="form-control" name="Penerbit">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Tahun_Terbit">Tahun Terbit:</label>
            <input type="text" class="form-control" name="Tahun_Terbit">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Pengarang">Pengarang:</label>
              <input type="text" class="form-control" name="Pengarang">
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