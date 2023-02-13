<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

<div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center"> </div>
                <div class="card-body">
                    <div class="col-md-6" style="">
                        <form action="" method="GET" class="input-group row">
                            <div class="input-group" style="">
                                <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                
                    <br>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Umur Karyawan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->namaKaryawan }}</td>
                                <td>{{ $karyawan->umurKaryawan }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->noTelp }}</td>

                                <td>
                                    <form action="/delete-karyawan/{id}" method="post">
                                    @csrf
                                    @method('delete')
                                <a> <button type="submit" class="btn btn-danger col-md">Delete</button></a>
                                </td>
                                
                                <td>
                                    <a href="/edit-karyawan/{id}"> <button type="submit" class="btn btn-success col-md">Edit</button></a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
        </div>
    </div>    
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</html>