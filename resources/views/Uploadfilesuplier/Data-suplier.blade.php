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
                <strong>DATA SUPLIER TOKO AKSESORIS </strong> 
                <div class="card-body">
    </div>
                    <div class="text-right">
                <div class="card-body">
                <a href="{{ route('create-suplier')}}" class="btn btn-success"> Tambah Data Suplier</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
        
            <tr>
                <th>No</th>
                <th>Nama Suplier</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
               

                <th>Aksi</th>
                
            </tr>
            @foreach ($dataSuplier as $item)
           
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_suplier }}</td>
                <td>{{ $item->no_tlp }}</td>
                <td>{{ $item->alamat}}</td>
                
                
                
                <td>
                    
                    <a href="{{url('edit-suplier',$item->id) }}" class="btn btn-warning">Edit</a>
                                   
                    <a href="{{url('delete-suplier',$item->id) }}" class="btn btn-danger">Hapus</a>
             </td>
              </tr>
            
            @endforeach
            </table>
            <a href="/home" class="btn btn-primary">Kembali</a>
</div>
       
  </body>
</html>