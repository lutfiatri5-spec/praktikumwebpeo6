<?php
session_start();

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "admin" && $pass == "123") {
        $_SESSION['login'] = true;
        echo "<script>window.location='dashboard.php'</script>";
        exit;
    } else {
        $error = "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {font-family: Arial; background:#2c3e50; color:white; text-align:center;}
.box {background:white; color:black; padding:20px; width:300px; margin:100px auto; border-radius:10px;}
input {width:90%; padding:8px; margin:5px;}
button {padding:10px; background:green; color:white; border:none;}
</style>
</head>
<body>

<div class="box">
<h2>Login Admin</h2>
<form method="POST">
<input type="text" name="user" placeholder="Username" required><br>
<input type="password" name="pass" placeholder="Password" required><br>
<button name="login">Login</button>
</form>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
</div>

</body>
</html>