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
                <strong>TAMBAH DATA PEMBELI</strong> 
</br>
</br>
    <form action="{{ route('simpan-pembeli') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
   
       <div class="form-group">
       Nama Pembeli
         <input type="text" id="nama_pembeli" name="nama_pembeli"class="form-control">
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
        Produk Dibeli
         <input type="text" id="produk_dibeli" name="produk_dibeli"class="form-control">
        </div>  
        <div class="form-group">
        Jumlah Dibeli
         <input type="number" id="jumlah_dibeli" name="jumlah_dibeli"class="form-control">
        </div>  
      
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
             <a href="/data-pembeli" class="btn btn-primary">Kembali</a>
            </form>
            </div>
            </div>
            </div>

        
  </body>
</html>