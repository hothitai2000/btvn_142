<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hi Tài</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <h1>Hãy Đăng nhập Tên của bạn</h1>
  <div class="login">
    <form action="" method="post">
    <h2>Member login</h2>
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password"  name="password">
    <button type="submit" name="btn">Login</button>
    <div id='show'></div>
    </form>
  <?php
   if( isset($_POST['btn'])){
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    if ($username =='Ho Thi Tai' && $password == '1234' ){
      // echo"<script>document.getElementById('show').innerHTML='Chúc mừng bạn đã đăng nhập thành công'  </script>";
      echo"<script> alert('Đăng nhập thành công') </script>";
    }
    else {
      echo"<script> alert('Đăng nhập thất bại') </script>";
      // echo"<script> document.getElementById('show').innerHTML=' Bạn đăng nhập không thành công' </script>";
    }
   }
  ?>
  </div>
</body>
</html>