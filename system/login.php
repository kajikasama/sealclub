<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login System</title>
</head>
<body>
  <h1>Prototep Login</h1>
  <form action="cek-login.php" method="post">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="Username" id=""></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="Password" id=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" value='Login'>
          <input type="reset" value='Reset'>
        </td>
      </tr>
    </table>
    <br>  
    <td>Belum Punya Akun ? <a href="register.php">Register</a> Sini</td>
  </form>
</body>
</html>