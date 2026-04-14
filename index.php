<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location='login.php'</script>";
    exit;
}

include 'koneksi.php';

$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir);
}

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto);

    mysqli_query($conn, "INSERT INTO laporan (judul, deskripsi, foto) 
    VALUES ('$judul','$deskripsi','$foto')");
}

if (isset($_GET['hapus'])) {
    mysqli_query($conn, "DELETE FROM laporan WHERE id=".$_GET['hapus']);
}

$data = mysqli_query($conn, "SELECT * FROM laporan");
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Edukasi</title>
<style>
body {font-family: Arial; background:#f4f4f4;}
.container {width:80%; margin:auto; background:white; padding:20px;}
input, textarea {width:100%; padding:10px; margin:5px;}
button {padding:10px; background:green; color:white; border:none;}
img {width:100px;}
table {width:100%; margin-top:20px; border-collapse: collapse;}
td, th {border:1px solid #ddd; padding:10px;}
</style>
</head>
<body>

<div class="container">
<h2>Upload Edukasi</h2>

<form method="POST" enctype="multipart/form-data">
<input type="text" name="judul" placeholder="Judul Edukasi" required>
<textarea name="deskripsi" placeholder="Deskripsi"></textarea>
<input type="file" name="foto" required>
<button name="simpan">Simpan</button>
</form>

<h2>Data Edukasi</h2>
<table>
<tr>
<th>No</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Foto</th>
<th>Aksi</th>
</tr>

<?php $no=1; while($row=mysqli_fetch_assoc($data)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $row['judul'] ?></td>
<td><?= $row['deskripsi'] ?></td>
<td><img src="uploads/<?= $row['foto'] ?>"></td>
<td>
<a href="?hapus=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

<br>
<a href="dashboard.php">Kembali</a>

</div>

</body>
</html>