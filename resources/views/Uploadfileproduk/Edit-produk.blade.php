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
                <strong>EDIT DATA PRODUK</strong> 
</br>
</br>
    <form action="{{ url('update-produk',$dt->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}  
        <div class="form-group">
       Nama Produk
         <input type="text" id="nama_produk" name="nama_produk"class="form-control">
        </div> 
        <div class="form-group">
       Harga
         <input type="number" id="harga" name="harga"class="form-control">
        </div>
        <div class="form-group">
      Stok Produk
         <input type="number" id="stok" name="stok"class="form-control">
        </div>  
        <div class="form-group">
            <input type="file" id="produk" name="produk"class="form-control">
        </div>
        </div>
        <div class="form-group">
        <img src="{{ asset('fileproduk/'. $dt->produk) }}" height="10%" width="20%" alt="" srcset="">
        </div>
        <div class="form-group">
        <center>Pilih Kategori</center>
            <select class="form-control" id="kategori" name="kategori">
            </div>
                <option value="Aksesoris Wanita">Aksesoris Wanita</option>
                <option value="Aksesoris Pria">Akseosris Pria</option> 
                </select>    
</div> 
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="/data-produk" class="btn btn-primary">Kembali</a>
            </div>
            </form>
            </div>
            </div>
            </div>
</body>
</html>
