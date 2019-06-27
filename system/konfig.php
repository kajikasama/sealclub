<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$database = 'sealclub';
$conn = mysqli_connect($server,$userdb,$passdb,$database);

function query($sql)
{
  global $conn;
  return mysqli_query($conn,$sql);
}

function cekbaris($query)
{
  return mysqli_num_rows($query);
}

function tampilArray($query)
{
  return mysqli_fetch_array($query);
}

function alert($teks)
{
  echo '<script>alert("'.$teks.'")</script>';
}
function redirect($teks,$lokasi)
{
  echo '<script>alert("'.$teks.'")
  location.href="'.$lokasi.'";
  </script>';
}

?>
