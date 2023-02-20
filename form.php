<!-- <!DOCTYPE html>
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
  //  if(isset($_POST['btn'])){
  //   $username = $_POST['username'];  
  //   $password = $_POST['password']; 
  //   $name=$_POST['tc'];

  //   if ($username =='Ho Thi Tai' ){

  //     echo"<script> alert( 'password không tồn tại')</script>";
  //   if($password=='5678') 
  //     echo"<script> alert('Username không tồn tại') </script>";
  //   }
  //   else{
  //     echo"<script> alert('Đăng nhập thành công') </script>";
  //   }
  //  }
  ?>
  </div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Tài</title>
</head>
<body>
    <?php
    $login=array(
        'students'=>array(
            'SV1'=>array(
            'mssv'=> 'V1',
            'name' => 'Hồ Thị Tài',
            'gender'=>'Nữ',
            'hometown' => 'Quảng Trị',
            'birthday'=>'2/3/2000',
            'major' => 'IT'
            ),
            'SV2'=>array(
            'mssv'=> 'V2',
            'name' => 'Hồ Thị Tâm',
            'gender'=>'Nữ',
            'hometown' => 'Quảng Trị',
            'birthday'=>'2/3/2000',
            'major' => 'IT'
            ),
            'SV3'=>array(
            'mssv'=> 'V3',
            'name' => 'Hồ Thị Tươi',
            'gender'=>'Nữ',
            'hometown' => 'Quảng Trị',
            'birthday'=>'17/5/1998',
            'major' => 'IT'
            ),
            'SV4'=>array(
                'mssv'=> 'V4',
                'name' => 'Hồ Văn Tiếp',
                'gender'=>'Nữ',
                'hometown' => 'Quảng Trị',
                'birthday'=>'30/4/1998',
                'major' => 'IT'
            )
            
            ),
    )
    ?>
    <div id="content">
        <?php
        foreach($login as $key=>$value){
        ?>
        <table border=1 class="list_login">
            <tr>
                <th>ID</th>
                <th>Ho Va Ten</th>
                <th>Gioi tinh</th>
                <th>Que quan</th>
                <th>Ngay sinh</th>
                <th>Nghề nghiệp</th>
            </tr>
            <?php foreach($value as $k=>$v){
                ?>
                <tr>
                    <td><?php echo $k; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['gender']; ?></td>
                    <td><?php echo $v['hometown']; ?></td>
                    <td><?php echo $v['birthday']; ?></td>
                    <td><?php echo $v['major']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
        <?php
        }
        ?> 
    </div>
</body>
</html>
