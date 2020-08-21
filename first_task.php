<?php

$array = array("1","13","45","2","31","16","99","7");
$sumEven = 0;
$sumOdd = 0;
foreach ($array as $value) {
    if($value % 2 == 0) {
        $sumEven = $sumEven + $value;
    }
    else{
        $sumOdd = $sumOdd + $value;
    }
}
    
echo $sumEven." - сумма четных"."\n";
echo $sumOdd." - сумма не четных"."\n";
    
?>