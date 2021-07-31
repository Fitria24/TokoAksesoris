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
                <strong>DATA PEMBELI TOKO AKSESORIS </strong> 
                <div class="card-body">
    </div>
                    <div class="text-right">
                <div class="card-body">
                <a href="{{ route('create-pembeli')}}" class="btn btn-success"> Tambah Data Pembeli</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
        
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Produk Dibeli</th>
                <th>Jumlah Dibeli</th>

                <th>Aksi</th>
                
            </tr>
            @foreach ($dataPembeli as $item)
           
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_pembeli }}</td>
                <td>{{ $item->no_tlp }}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->produk_dibeli}}</td>
                <td>{{ $item->jumlah_dibeli}}</td>
                
                
                <td>
                    
                    <a href="{{url('edit-pembeli',$item->id) }}" class="btn btn-warning">Edit</a>
                                   
                    <a href="{{url('delete-pembeli',$item->id) }}" class="btn btn-danger">Hapus</a>
             </td>
              </tr>
            
            @endforeach
            </table>
            <a href="/home" class="btn btn-primary">Kembali</a>
</div>
       
  </body>
</html>