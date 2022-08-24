<?php

// No 12  To'plamdagi eng katta va kichik sonlarni topish
$array = array(1,2,3,4,5,6,7,8,9);
$n=0;
foreach ($array as $arr) {
    $n++;
}
$max = $array[0];
for($i=1; $i<$n; $i++) {
    if($array[$i]>$max) {
        $max = $array[$i];
    }
}
$min = $array[0];
for($i=1; $i<$n; $i++) {
    if($array[$i]<$min) {
        $min = $array[$i];
    }
}
echo $max;
echo "<br>";
echo $min;
// No 13  To'plamdagi eng kichik sonni va uning o'rnini topish
$array = array(2,7,1,5,4,17,6,1,8);
$min = $array[0];
$i = 1;
foreach ($array as $arr) {
    if($arr<=$min) {
        $min = $arr;
        $index = $i;
    } $i++;
}
echo $min;
echo "<br>";
echo $index;
/*
// No14 To'plamdagi birinchi uchragan eng kichik va oxirgi uchragan eng katta sonlarni va ularning o'rnini topish
$array = array(2,1,9,3,4,6,1,8,9);
$max=$array[0];
$i=1;
$min = $array[0];
$index2 = 1;
foreach ($array as $arr) {
    if($array>=$max) {
        $max = $arr;
        $index = $i;
    } 
    elseif($arr<$min) {
        $min = $arr;
        $index2 = $i;
    }
    $i++;
}
echo $min;
echo "<br>";
//echo $index2;
echo "<br>";
echo $max;
echo "<br>";
echo $index;
return ;
// No15 To'plamdagi birinchi uchragan ekstremal sonni va uning o'rnini topish
//$array = array(1,2,3,4,5,1,3,2,5);
//$array = array(7,8,5,1,9,4,6,2,1);
$array = array(7,8,5,2,9,4,6,9,1,1);
$max=$array[0];
$i=1;
$min = $array[0];
$index = 1;
$index2 = 1;
foreach ($array as $arr) {
    if($arr>$max) {
        $max = $arr;
        $index = $i;
    } 
    elseif($arr<$min) {
        $min = $arr;
        $index2 = $i;
    }
    $i++;
}
if($index>$index2) {
    echo $min;
    echo "<br>";
    echo $index2;
}
 else {
    echo $max;
    echo "<br>";
    echo $index;
}
return ;
// No16 To'plamdagi oxirgi uchragan ekstremal sonni va uning o'rnini topish
$array = array(1,2,3,4,5,1,3,2,5);
//$array = array(7,8,5,1,9,4,6,2,1);
//$array = array(7,8,5,2,9,4,6,9,1,1);
$max=$array[0];
$i=1;
$min = $array[0];
$index = 1;
$index2 = 1;
foreach ($array as $arr) {
    if($arr>=$max) {
        $max = $arr;
        $index = $i;
    } 
    elseif($arr<=$min) {
        $min = $arr;
        $index2 = $i;
    }
    $i++;
}
if($index<$index2) {
    echo $min;
    echo "<br>";
    echo $index2;
}
 else {
    echo $max;
    echo "<br>";
    echo $index;
}
return ;
*/

// No17 To'plamdagi eng kichik musbat sonni topish

$array = array(-1,2,3,4,5,1,3,2,5);
//$array = array(7,8,5,1,9,4,6,2,1);
//$array = array(7,8,5,2,9,4,6,9,1,1);
$i = 1;
$min = $array[0];
foreach ($array as $arr) {
    if($arr<=$min) {
        if($arr>0) {
          $min = $arr;
          echo $min;
        } 
    } 
    $i++;
} if($arr<0) {
    echo 0;
} 

return ;
