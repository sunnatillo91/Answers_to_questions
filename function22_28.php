<?php
/*
// No22 Prime funksiyasini hosil qilish tub sonlar miqdorini topish
$array = array(1,2,3,4,5,6,7,8,9);
    //$N = array(9,8,5,1,9,4,6,2,3);
    //$N = array(5,8,50,2,4,6,90,10);
$n = $array[0];

function IsPrime($array){
    $k = 0;
    for ($i=0; $i<count($array); $i++) {          // $i arrayni indeksi
        $tub = true;
        if($array[$i]<2) continue;                  // siklni pastki qismini bajarmasdan davom ettiradi va i ga 1 qoshadi
        for ($j = 2; $j<$array[$i]; $j++ ) {

            if($array[$i]%$j==0) {
                $tub = false;
            }
        } if($tub) {
            
            $k++;
            echo $array[$i];
        }
        
    }       echo $k;
            echo "\n";
}
IsPrime($array);

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


// No 23 Butun qiymat qaytaruvchi DigitCount(K) funksiyasini hosil qlish. F-ya k ning raqamlari sonini qaytarsin

$k = 12345;
//$k = 123000;
//$k = 10120;
$a = 0;
function DigitCount($k){
    $a = 0;
    while ($k>=1) {
        $k/=10;
        $a++;
    } return $a;
}
//echo DigitCount($k);

//echo "\n";


// No 24 Butun son qaytaruvchi DigitN(K,N) funksiyasini hosil qiling. F-ya k ning n-raqamini qaytarsin. Agar K soni raqamlari N dan kichik bo'lsa -1 qaytarsin
$k = 123458;
$n = 8;
$c = 0;
$c += (DigitCount($k)-$n);
function DigitN($k, $n, $c) {
    if($n<=DigitCount($k)) {
        echo $k/(10**$c)%10;
       }
    elseif($n>DigitCount($k)) {
        echo -1;
    }
}

DigitN($k, $n, $c);

// No 25 IsPalindrom(N) f-yasini hosil qiling. Agar N palindrom bo'lsa true else false. O'ngdan chapga va chapdan 
// o'ngga bir xil o'qiladigan sonlar palindrom deyiladi. Berilgan 3 ta sondan nechtasi palindromligi aniqlansin

$n = 12321; 123; 12321;

function IsPalindrom($n) {
    $a = 0;
    $c = $n;
    $d = 0;
    while(floor($c)) {
        $b = $c%10;
        $a = $a*10+$b;
        $c/=10;
        $d++;
    } 
    if($a == $n) {
        return 1;
        
    } else {
        return 0;
    } 
}

$num = array(12321, 123, 12321, 454);
$i=0;
foreach ($num as $n) {
    if (IsPalindrom($n)){
        $i++;
        echo $n;
        echo "\n";

    }
}
echo $i;
*/

// No 26 Butun qiymat qaytaruvchi EKUB(A, B) funksiyasini hosil qiling
$b = 40;
$a = 56*5*5000;
function Tubmi($a) {
    for($i=2; $i<$a; $i++) {
        if($a%$i==0) {
            return false;
        } 
        } 
        return true;

   } 

function EKUB($a, $b)
   {
    
       $f = 1;
       $c=$a;
       if($a>$b){
        $c = $b;
       }
       for ($i = 2; $i <= $c; $i++) {
           if (!Tubmi($i))
               continue;
           if ($a % $i == 0) {
            if ($b % $i == 0) {
               $f *= $i;
               $a/=$i;
               $b/=$i;
               $i--;
            }
           }
       }
   
       echo $f;
       echo "\n";
   }
EKUB($a, $b);

// No 27  EKUB funksiyasidan foydalangan holda EKUK f-yasini hosil qiling

$a = 24;
$b = 18;


function EKUK($a, $b) {
    $c = 0;
    if(EKUB($a, $b)) {
        $c += EKUB($a, $b);
        echo ($a*$b)/$c;
}
}

/*
// No 30  IsLeapYear(Year) funksiyasini hosil qilish year kabisa b-sa true else false qaytarsin. Berilgan 3 ta yildan nechtasi kabisa ekanligi aniqlansin

$year = 1300; 2020; 1900;       //array
function IsLeapYear($year) {
    
    for($i=2; $i<=$year; $i++) {
        $i = 0;
        if($year%4==0){
            echo 366;
            $i++;
            return true;
        if($year%100 == 0 && $year%400!=0){
            echo 365;
            return false;
        }
        }
        echo 365;
        return;
    }
    }

IsLeapYear($year);
*/
// No 31  IsLeapYear(Year) funksiyasini hosil qilish year kabisa b-sa true else false qaytarsin. Berilgan 3 ta yildan nechtasi kabisa ekanligi aniqlansin
