<?php 
  include 'konfig.php';

  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  
  $sql = "select * from tbuser where Username='$Username' and Password='$Password'";
  $query = query($sql);
  $cek = mysqli_num_rows($query);
  if($Username == '' && $Password == '')
  {
    redirect('Login Gagal! User dan Pass Masih Kosong','login.php');
  }
  if($Username == '')
  {
    redirect('Login Gagal! User Masih Kosong','login.php');
  }
  if($Password == '')
  {
    redirect('Login Gagal! Pass Masih Kosong','login.php');
  }

  if($cek > 0)
  {
    session_start();
    $hasil = tampilArray($query);
    $_SESSION['Username'] = $hasil['Username'];
    $_SESSION['Password'] = $hasil['Password'];
    
    redirect('Login Berhasil!','home.php');
  }
  else
  {
    redirect('Login Gagal! Cek User Dan Password','login.php');
  }
?>