<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-color: #FFA500; /*warna background orange */
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
  <title>Tambah Siswa</title>
</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
        <div class="card-header bg-primary text-white text-center" style="font-size: 24px;">
          INPUT DATA SISWA
        </div>

          <div class="card-body">
          <form action="<?php echo base_url() ?>index.php/siswa/simpan" method="POST" name="myForm" onsubmit="return validateForm()">

              <div class="form-group">
                <label>Masukan NIS</label>
                <input type="text" name="nis" placeholder="Masukkan NIS Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Siswa" class="form-control">
              </div>

              <div class="form-group">
                <label for="Kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                  <option value="17.6A.01">17.6A.01</option>
                  <option value="17.6B.01">17.6B.01</option>
                  <option value="17.6C.01">17.6C.01</option>
                </select>
              </div>

              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
              </div>

              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Budha">Protestan</option>
                  <option value="Budha">Khonghucu</option>
                </select>
              </div>

              <!-- Membuat input jenis kelamin radio button php -->
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki">
                  <label class="form-check-label" for="laki_laki">Laki-laki</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                  <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"></textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-success" style="margin-bottom: 10px"><i class="fa fa-save"></i> SIMPAN</button>
                <button type="reset" class="btn btn-success" style="margin-bottom: 10px; background-color: #FFA500;"><i class="fa fa-refresh"></i> RESET</button>
                <a href="<?php echo base_url() ?>index.php/siswa" class="btn btn-primary" style="margin-bottom: 10px; background-color: #808080;"><i class="fa fa-arrow-left"></i> KEMBALI</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
  function validateForm() {
    var nis = document.forms["myForm"]["nis"].value;
    var nama = document.forms["myForm"]["nama"].value;
    var kelas = document.forms["myForm"]["kelas"].value;
    var tanggal_lahir = document.forms["myForm"]["tanggal_lahir"].value;
    var tempat_lahir = document.forms["myForm"]["tempat_lahir"].value;
    var jenis_kelamin = document.forms["myForm"]["jenis_kelamin"].value;
    var agama = document.forms["myForm"]["agama"].value;
    var alamat = document.forms["myForm"]["alamat"].value;

    if (nis == "") {
      alert("NIS harus diisi");
      return false;
    }

    if (nama == "") {
      alert("Nama harus diisi");
      return false;
    }

    if (kelas == "") {
      alert("Kelas harus dipilih");
      return false;
    }

    if (tanggal_lahir == "") {
      alert("Tanggal Lahir harus diisi");
      return false;
    }

    if (tempat_lahir == "") {
      alert("Tempat Lahir harus diisi");
      return false;
    }

    if (jenis_kelamin == "") {
      alert("Jenis Kelamin harus dipilih");
      return false;
    }

    if (agama == "") {
      alert("Agama harus dipilih");
      return false;
    }

    if (alamat == "") {
      alert("Alamat harus diisi");
      return false;
    }
  }
</script>
</body>
</html>