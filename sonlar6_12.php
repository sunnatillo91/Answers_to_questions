<?php


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
