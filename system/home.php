<?php 
include 'konfig.php';
session_start();
if(isset($_SESSION['Username']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prototep</title>
</head>
<body>
  <p>Selamat Datang <?=$_SESSION['Username']; ?></p>
  <a onclick="return confirm('Anda Yakin Ingin Logout ?')" href="logout.php">Logout</a>
</body>
</html>

<?php
}
else
{
  redirect('Anda Tidak Boleh Masuk','login.php');
}
?>