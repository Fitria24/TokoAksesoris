<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Toko Aksesoris</title>
    </head>
    <body>
        </div>
        <div class="card mt-5">
                <div class="card-header text-center">
                <strong>DATA PRODUK TOKO AKSESORIS </strong> 
                <div class="card-body">
    </div>
    <div class=" text-right">
    <a href="{{ route('create-produk')}}" class="btn btn-success"> Tambah Data Produk</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <div class="container">
        </div>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Produk</th>
               
                <th>Aksi</th>
                
            </tr>
            @foreach ($dataProduk as $item)
           
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok}}</td>
                <td>{{ $item->kategori}}</td>
                <td width="30%">
                
                <img src="{{ asset('fileproduk/'. $item->produk) }}" height="100px" width="100px" alt="" srcset="">
                </td>
                <td>
                   

                    <a href="{{url('edit-produk',$item->id) }}" class="btn btn-warning">Edit</a>
                                   
                    <a href="{{url('delete-produk',$item->id) }}" class="btn btn-danger">Hapus</a>
                   
             </td>
             
              </tr>
            
            @endforeach
          
            </table>
            <a href="/home" class="btn btn-primary">Kembali</a>
</div>
       
  </body>
</html>