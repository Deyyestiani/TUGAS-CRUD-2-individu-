<?php
include("config.php");
$id_guru = '';
$nama = '';
$jk = '';
$alamat = '';
$notel = '';
$email = '';

if(isset($_GET['edit'])){
  $id_guru = $_GET['edit'];
  $sql = "SELECT * FROM data_guru WHERE id_guru='$id_guru';";
  $query = mysqli_query($db, $sql);
  $result = mysqli_fetch_assoc( $query );
  $nama = $result['nama_guru'];
  $jk = $result['jenis_kelamin'];
  $alamat = $result['alamat'];
  $notel = $result['no_telepon'];
  $email = $result['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Makassar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Makassar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Mata Pelajaran SMK Negeri 1 Makassar</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
    <label for="nama" class="form-label">Nama Guru: </label>
    <input type="text" class="form-control" name="nama_guru" placeholder="nama lengkap" />
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" rows="3"></textarea>
</div>
<div class="mb-3">
<div class="form-check">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
    <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
    <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
    <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="nama" class="form-label">No Telepon: </label>
    <input type="text" class="form-control" name="no_telepon" />
</div>
<div class="mb-3">
    <label for="nama" class="form-label">Email: </label>
    <input type="text" class="form-control" name="email" />
</div>
<div class="mb-3">
    <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
</div>
</form>
</div>

<div class="mb-3 row mt-4">
  <div class="col">
  <?php
  if(isset($_GET['edit'])){
  ?>
  <button type="submit" name="aksi" value="edit" class="btn btn-primary">
      Simpan Perubahan
</button>
<?php
  } else{
    ?>
    <button type="submit" name="aksi" value="add" class="btn btn-primary">
      Daftar
</button>
<?php
  }
  ?>
  <a href="index.php" type="button" class="btn btn-danger">Batal</a>
</div>
</body>
</html>