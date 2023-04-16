<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>Data Siswa</title>
  <style>
  table {
    margin-bottom: 20px;
  }

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
  .btn:hover {
    background-color: RoyalBlue;
  }
</style>

</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
        <div class="card-header bg-primary text-white text-center" style="font-size: 24px;">
          DATA SISWA
        </div>
          <div class="card-body">
         
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <!-- Buat table heading untuk No, Nama, NIS, Kelas, Tanggal Lahir, Tempat Lahir, Alamat, Jenis Kelamin, Agama -->
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIS</th>
                  <th>Kelas</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $no = 1;
                foreach ($view_data_siswa as $siswa) {
                ?>

                  <tr>
                    <!-- Buat table body untuk menampilkan data siswa -->
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $siswa->nama ?></td>
                    <td><?php echo $siswa->nis ?></td>
                    <td><?php echo $siswa->kelas ?></td>
                    <td><?php echo $siswa->tanggal_lahir ?></td>
                    <td><?php echo $siswa->tempat_lahir ?></td>
                    <td><?php echo $siswa->alamat ?></td>
                    <td><?php echo $siswa->jenis_kelamin ?></td>
                    <td><?php echo $siswa->agama ?></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <div class="text-center">
            <a href="<?php echo base_url() ?>index.php/siswa/tambah" class="btn btn-md btn-success" style="margin-bottom: 10px; background-color: #32cd32;">
          <i class="fa fa-plus"></i> TAMBAH DATA
          </a>
                </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>