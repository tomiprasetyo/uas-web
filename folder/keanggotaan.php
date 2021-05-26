<?php include '../layout/header.php';?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Pendaftaran Anggota Baru</title>
  </head>
  <body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">Formulir Pendaftaran Anggota Baru</h2>

        <form action="">
            <div class="form-group">
                <label for="NamaLengkap">Nama Lengkap</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Nama Lengkap Anda" id="NamaLengkap">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TempatLahir">Tempat Lahir</label>
                        <input type="text" name="" class="form-control" placeholder="Masukan Tempat Lahir Anda" id="TempatLahir">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TanggalLahir">Tanggal Lahir</label>
                        <input type="date" name="" class="form-control" id="TanggalLahir">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenis Kelamin</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Agama</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Pilih Agama</option>
                    <option value="1">Islam</option>
                    <option value="2">Kristen</option>
                    <option value="2">Hindu</option>
                    <option value="2">Buddha</option>
                </select>
            </div>

            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status Perkawinan</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Pilih Status Perkawinan</option>
                    <option value="1">Sudah Menikah</option>
                    <option value="2">Belum Menikah</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Gelar">Gelar</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Gelar Anda" id="Gelar">
            </div>

            <div class="form-group">
                <label for="AlamatLengkap">Alamat</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Alamat Lengkap Anda" id="AlamatLengkap">
            </div>

            <div class="form-group">
                <label for="AkademiUniversitas">Akademi/Universitas</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Institusi Pendidikan Anda" id="AkademiUniversitas">
            </div>

            <div class="form-group">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Jenjang Pendidikan</label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Jenjang Pendidikan</option>
                    <option value="1">D3</option>
                    <option value="2">D4</option>
                    <option value="3">S1</option>
                    <option value="4">S1 Ners</option>
                    <option value="5">S2</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TanggalMasuk">Tanggal Masuk</label>
                        <input type="date" name="" class="form-control" id="TanggalMasuk">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="TanggalKeluar">Tanggal Keluar</label>
                        <input type="date" name="" class="form-control" id="TanggalKeluar">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="NomorIjazah">Nomor Ijazah</label>
                <input type="text" name="" class="form-control" placeholder="Masukan Nomor Ijazah Anda" id="NomorIjazah">
            </div>

            <div class="form-group">
                <label for="">Upload Ijazah</label>
                <input type="file" class="form-control-file" name="">
                <small>Upload File Dengan Ukuran Maksimal 2 MB</small>
            </div>

            <button type="button" class="btn btn-primary btn-lg" id="button" onclick="alert('Data Anda Berhasil Dikirim')">Kirim</button>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
        document.getElemenById("button").click();
        }
    </script>
  </body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>