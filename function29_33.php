<?php

// No 30  IsLeapYear(Year) funksiyasini hosil qilish year kabisa b-sa true else false qaytarsin. Berilgan 3 ta yildan nechtasi kabisa ekanligi aniqlansin

$year = array(1600, 2000, 2019);       //array
function IsLeapYear($year)
{   $i = 0;
    foreach ($year as $y) {
         // (4 ga bolinsa va x % 100 != 0 ) ||  ( x % 100 == 0 && x % 400 == 0
        if (($y % 4 == 0 && $y % 100 !=0) || ($y % 100 == 0 && $y % 400 == 0)) {
            $i++;
        }          
      } echo $i;
    }    

IsLeapYear($year);

// No 31  IsLeapYear(Year) funksiyasini hosil qilish year kabisa b-sa true else false qaytarsin. Berilgan 3 ta yildan nechtasi kabisa ekanligi aniqlansin


?>