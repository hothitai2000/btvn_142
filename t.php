<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>CHÀO TÀI XOĂN</title>
</head>
<body>
    <h1>TỪ ĐIỂN ANH - VIỆT</h1>
    <form action="" method="post">
        <input type="text" name="word">
        <button type="text" name="btn">Research</button>
    </form>
    <?php
    if(isset($_POST['word']))
       echo $_POST['word'] .'<br>';
    $key=strtolower ($_POST['word']);
    $result="";
    $dictionary=array("vulnerable" => "Dễ bị tổn thương","aliens"=>"Người ngoài hành tinh","drawback"=>"Hạn chế/Trở ngại","harbouring dreams"=>"Nuôi dưỡng ước mơ");
    foreach($dictionary as $English=> $Vietnamese){
        if($English==$key){
            $result='Traslation :'  .$Vietnamese;
            break;
        }else{
            $result='Kết quả không tìm thấy';
        }
    }
    echo $result;
    ?>
</body>
</html>
