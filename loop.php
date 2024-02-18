<?php

// Loops IN PHP

// For Loop 

//we know start and end point to use for loop;

$num=4;
for($i=1;$i<=10;$i++){
    echo $num .'*'.$i.'='.$num*$i .'<br>';
}

//While Loop

//we know strat point but we do not know end point to use while loop;

$num1=12;
$k=1;
while($k<=10){
    echo $num1 .'*'.$k.'='.$num1*$k .'<br>';
    $k++;

}

// Do-While Loop

//if coditional false but we print at least one time to use do-while loop;

$num2=18;
$j=1;
do{
    echo $num2 .'*'.$j.'='.$num2*$j .'<br>';
    $j++;

}
while($j<=20);
?>