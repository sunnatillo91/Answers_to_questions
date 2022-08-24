<?php
/* No1

$a = 4;
$b = 5;
$c = 4;

if($a>$b && $b>$c) {
    echo $c;
} elseif($b>$c && $c>$a) {
    echo $a;
} elseif($c>$a && $a>$b) {
    echo $b;
} else {
    echo $a;
}

No2

$year = 300;

if( $year%4 == 0 && $year%400 == 0) {
    echo 366;
}
else {
    echo 365;
}

No3

$x = 6;
$y = 8;

if($x>$y) {
    echo ($x+$y)/2;
    echo $x*$y*2;
} 
elseif($x<$y) {
    echo ($x+$y)/2;
    echo ($x*$y)*2;
    
}

else {
    echo $x, $y;
} 


$x = 30;
$y = 11;
if($y==2) {
    if($x<28) {
        echo ($x+1), $y;
    } elseif($x==28) {
        echo '01' . '.' . '03';
    } elseif($x>28) {
        echo 'Bunday sana mavjud emas';
    }
} elseif($y==1 || $y==3 || $y==5 || $y==7 || $y==8 || $y==10 || $y==12 ) {
    if($x<31) {
        echo $x+1 . '.' . $y;
    } elseif($x==31 && $y==12) {
        echo '01' . '.' . '01';
    } elseif($x==31) {
        echo '01' . '.' . $y+1;
    }} elseif($x>31) {
        echo 'Bunday sana mavjud emas';
    
} elseif($y==4||$y==6 || $y==9 || $y==11) {
    if($x<30){
        echo $x+1 . '.' . 0,$y;
    } elseif($x==30) {
        echo '01' . '.' . $y+1;
    } } elseif($x>30) {
        echo 'Bunday sana mavjud emas';
}elseif($y>12) {
    echo 'Bunday oy mavjud emas.';
} 
elseif($x>31) {
    echo 'Bunday sana mavjud emas';
} 
else {
    echo 'Bunday sana mavjud emas';
}



$n = 10;
$tub = true;
for($i = 2; $i<$n; $i++){
    if($n%$i ==0){
        $tub = false;
    }
}

if($tub == true) {
    echo $n. ' tub son';
    } else {
        echo $n. ' tub son emas';
    }


//No 5 Mukammal son

$n = 1000000;
for ($i = 6; $i<=$n; $i++) {        //n gacha bo'lgan sonlarni ajratib olamiz
    $a = 0;
    for ($j = 2; $j<$i; $j++) {     
        if($i%$j==0) {
            $a+=$j;                 // bo'luvchilar yig'indisi
        }
        
    } 
 
if(++$a==$i ) {
        echo $i;
        echo "<br>";
    }
}


$a = 40;
$b = 56;
function Tubmi($a)
{
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0) {
            return false;
        }
    }
    return true;
}


function EKUB($a, $b)
{
    $c = [];
    $f = [];
    for ($i = 2; $i <= $a; $i++) {
        if (!Tubmi($i))
            continue;
        if ($a % $i == 0) {
            $c[] = $i;
            $a/=$i;
            $i--;
        }
    }
    print_r($c);

    for ($i = 2; $i <= $b; $i++) {
        if (!Tubmi($i))
            continue;
        if ($b % $i == 0) {
            $f[] = $i;
            $b /= $i;
            $i--;
        }
    }
    print_r($f);
}

EKUB($a, $b);   

*/

$year = 2000;
function IsLeapYear($year) {
    if($year%4==0 && $year%400==0){
        echo true;
    } else
        echo false;
}

print_r(IsLeapYear($year));


?>