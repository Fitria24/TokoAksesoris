<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Toko Aksesoris</title>
    </head>
    <body>
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>TAMBAH DATA SUPLIER</strong> 
</br>
</br>
    <form action="{{ route('simpan-suplier') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
   
       <div class="form-group">
       Nama Suplier
         <input type="text" id="nama_suplier" name="nama_suplier"class="form-control">
        </div> 
        <div class="form-group">
       Nomor Telepon
         <input type="number" id="no_tlp" name="no_tlp"class="form-control">
        </div>
        <div class="form-group">
       Alamat
         <input type="text" id="alamat" name="alamat"class="form-control">
        </div>  
       
      
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
             <a href="/data-suplier" class="btn btn-primary">Kembali</a>
            </form>
            </div>
            </div>
            </div>

        
  </body>
</html>