<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Karyawan Perusahaan Mexico</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center"> </div>
            <div class="card-body">
                <form action="/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namaKaryawan" class="form-label">Nama Karyawan</label>
                        <input name="namaKaryawan" type="string" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Karyawan" require minlength ="5" maxlength="20">
                    </div>
                    <div class="mb-3">
                        <label for="umurKaryawan" class="form-label">Umur Karyawan</label>
                        <input name="umurKaryawan" type="number" class="form-control" id="formGroupExampleInput" placeholder="Input Umur Karyawan" require min="20">


                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Alamat" require minlength ="10" maxlength="40">
                    </div>
                    <div class="mb-3">
                        <label for="noTelp" class="form-label">No telp</label>
                        <input name="noTelp" type="string" class="form-control" id="formGroupExampleInput" placeholder="Input No telp" require minlength="9" maxlength ="12">
                    </div>


                    <button type="submit" class="btn btn-success" href="/dataKaryawan">Insert</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>
</html>