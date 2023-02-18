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
    <inpput type='text' name='tc'></inpput>
    <button type="submit" name="btn">Login</button>
    
    </form>
  <?php
   if(isset($_POST['btn'])){
    $username = $_POST['username'];  
    $password = $_POST['password']; 
    $name=$_POST['tc'];

    if ($username =='Ho Thi Tai' ){

      echo"<script> alert( 'password không tồn tại')</script>";
    if($password=='5678') 
      echo"<script> alert('Username không tồn tại') </script>";
    }
    else{
      echo"<script> alert('Đăng nhập thành công') </script>";
    }
   }
  ?>
  </div>
</body>
</html>