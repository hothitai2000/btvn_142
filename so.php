<!-- Bài 1. Cho 1 mảng gồm n phần tử là các số nguyên,
hãy in ra màn hình số lớn nhất và nhỏ nhất của mảng. 
Cho biết vị trí của các phần tử đó. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi Tai</title>
</head>
<body>
<?php
    $array = [199,2,3,4,5,6,7,8,9,189];
    $max= $array[0];
    $min= $array[0];
    $position_max = 0;
    $position_min = 0;
    for($i=0;$i<count($array);$i++)
    {
            if ($array[$i]>$max){
                $max=$array[$i];
                $position_max=$i;
            }
            if ($array[$i]<$min){
                $min=$array[$i];
                $position_min=$i;
            }
        }
    echo"Giá trị lớn nhất là $max,tại vị trí $position_max <br>";
    echo"Giá trị nhỏ nhất là $min,tại vị trí $position_min";
?> 
</body>
</html>
