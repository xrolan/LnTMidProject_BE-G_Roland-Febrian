<?php
    include "";
    $id = $_GET[''];
    $ambilData = mysqli_query($koneksi.php , "SELECT * FROM customer WHERE idcustomer='$id'");
    $data= mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan PT Meksiko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
<div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center"> </div>
        <div class="card-body">
            <form action="{{route('updateKaryawan', ['id' => $karyawan1->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="namaKaryawan" class="form-label">Nama Karyawan</label>
                    <input name="namaKaryawan" type="text" value="{{$karyawan1->namaKaryawan}}" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Karyawan">
                    @error('namaKaryawan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="umurKaryawan" class="form-label">Umur Karyawan</label>
                    <input name="umurKaryawan" type="text" value="{{$karyawan1->umurKaryawan}}" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Karyawan">
                    @error('umurKaryawan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input name="alamat" type="numeric" value="{{$karyawan1->alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Input Alamat">
                    @error('alamat')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="noTelp" class="form-label">No telp</label>
                    <input name="noTelp" type="date" value="{{$karyawan1->noTelp}}" class="form-control" id="formGroupExampleInput" placeholder="Input No telp">
                    @error('noTelp')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>