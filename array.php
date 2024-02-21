<?php

//Arry in PHP

//Associative Array

// first Method

$Student=Array(
    'Ali'=>20,
    'Yahya'=>21,
    'Zubir'=>22,
    'Ayan'=>10,
);

//Assending Order in value
asort($Student);

// Assending Order in Key

 ksort($Student);

//  Descending order in value

 arsort($Student);

//  Descending order in Key

 krsort($Student);

// Count Array Length

 echo count($Student);


foreach($Student as $keyd => $obj){
    echo  $keyd.'     '.'age is'.'     '. $obj.'<br>';
}


// Second Method

$Student['ali']=20;
$Student['usama']=30;
$Student['khizer']=10;

echo $Student['khizer'];


// MultiDimensional Array

$number=[
    [1,2,4,5],
    [9,8,0,4],
    [7,24,34,32],
];

echo $number[2][2];

// Nested Loop

for($row=0;$row<3;$row++){
    for($col=0;$col<4;$col++){
        echo $number[$row][$col].'   ';
    }
    echo '<br>';
}

?>