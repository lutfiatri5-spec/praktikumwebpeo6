<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location='login.php'</script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
body {font-family: Arial; background:#ecf0f1;}
.container {text-align:center; margin-top:100px;}
a {padding:10px 20px; background:green; color:white; text-decoration:none; border-radius:5px;}
</style>
</head>
<body>

<div class="container">
<h1>Dashboard Pelaporan Sampah 🗑️</h1>
<br>
<a href="index.php">Masuk ke Laporan</a>
<br><br>
<a href="logout.php">Logout</a>
</div>

</body>
</html>