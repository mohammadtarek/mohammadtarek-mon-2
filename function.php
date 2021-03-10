<?php

function get_price_with_discount($price)
{
    if ($price < 1000) {
        $discount = $price * 0.1;
        $price -= $discount;
        echo 'Price equal '.$price.'<br>';
    } elseif ($price >= 1000) {
        $discount = $price * 0.05;
        $price -= $discount;
        echo 'Price equal '.$price.'<br>';
    }
    
}
get_price_with_discount(1000);

function getNumMatches($word){
$arr=[];
$arr[0]='apple';
$arr[1]='car';
$arr[2]='apple';
$arr[3]='iphone';
$arr[4]='golf';
$count=0;
for($i=0;$i<count($arr);$i++){
    
    if($arr[$i]==$word){
        $count++;
    }
}
return $count;
}
echo'number of rpeation = '. getNumMatches('jj');