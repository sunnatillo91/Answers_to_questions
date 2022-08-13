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


$x = 3;
$y = 15;

echo date("d.m.Y",strtotime("$x.$y.2022")+86400);

return;
if($y==2) {
    if($x<28) {
        echo ($x+1), $y;
    } elseif($x==28) {
        echo '01.03';
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


*/
/*

//No 5 Mukammal son - O'zidan boshqa bo'luvchilari yig'indisi o'ziga teng bo'lgan son

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


// No 6 Tub sonlar
$n = 50;

for ($i = 2; $i<=$n; $i++) {
    $tub = true;
    for ($j = 2; $j<$i; $j++) {
        if($i%$j==0) {
            $tub=false;                       
        } 
    }  if($tub) {
        echo $i; 
        echo "<br>";
    } 
}



//No 7 do'st sonlar -  1- son bo'luvchilari yig'indisi 2-songa, 2-son bo'luvchilari yig'indisi 1-songa teng bo'lgan sonlar
$n = 10000;

for ($i=2; $i<=$n; $i++) {                 // $a = 284   $i=220     $a - birinchi son bo'luvchilari yig'indisi;  
    $a = 0;
    $b=0;
    for ($j=1; $j<$i; $j++) {                                    // $i - ikkinchi son bo'luvchilari yig'indisi;
        if($i%$j==0) {
            $a+=$j;
        } 
    }
    for ($j=1; $j<$a; $j++) {
        if($a%$j==0) {
            $b+=$j;
        } 
    }

    if($i==$b && $i!=$a && $a>$i) {
        echo $i;
        echo "<br>";
        echo $a;
        echo "<br>";
    }
}


// No 8   Bank foizi
$x = 1000;
$y = $x;
$p = 7;
$k = 0;

while ($y<=2*$x) {
    $y*=(100+$p)/100;
    
    $k++;
}

echo $k;
echo "<br>";
echo $y; 


// No 9  Sonning raqamlari soni va raqamlari yig'indisi


$n = 123;
$k = 0;
$a = 0;

while ($n>=1) {
    $a+=$n%10;
    $n/=10;
    $k++;  
}
echo $a;
echo "<br>";
echo $k;
echo "<br>";



// No 10   Evklid algoritmi bo'yicha EKUB(a,b) ni topish
$a = 40;
$b = 56;

while ($a<>$b) {
    if($a>$b) {
        $a = $a-$b; 
    } else {
        $b=$b-$a;
    }
}

echo $a;


// No 11   n sonini m ga bo'lganda qoldiq va butun qismni topish (/ va % amallarisiz)

$n = 56;
$m = 10;
$a = 0;
while($n>=$m) {
    $n-=$m;
    $a++;
    }                 
 
//echo $;
echo $n;
echo "<br>";
echo $a;
*/
/*
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



?>