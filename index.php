<?php
// Conditional Statement


// Else-IF 

$per=78;
if($per >= 80 && $per<=100){
    echo 'Your Grade is A-one';
}
elseif($per >= 70 && $per<=79.99){
    echo 'Your Grade is A';
}
elseif($per >= 60 && $per<=69.99){
    echo 'Your Grade is B';
}
elseif($per >= 50 && $per<=59.99){
    echo 'Your Grade is C';
}
elseif($per >= 40 && $per<=49.99){
    echo 'Your Grade is D';
}
elseif($per < 40){
    echo 'Your Grade is Fail';
}
else{
    echo 'Your Percantage is Wrong';
}

echo '<br>';

// Nested IF 

$User='Admin';
$pass='Admin123';
if($User!=''&& $pass!=''){
    if($User=='Admin' || $User=='admin'&& $pass=='Admin123' || $pass=='admin123'){
        echo 'Login Successfully';
    }
    else{
        echo 'Invalid Credential';
    }

}
else{
    echo 'Username And Password is Required';
}
echo '<br>';

// Switch 

$day=7;
switch($day){
    case 1:
        echo 'Monday';
     break;

    case 2:
        echo 'Tuesday';
    break;

    case 3:
        echo 'Wednesday';
    break;

    case 4:
        echo 'Thursday';
    break;

    case 5:
        echo 'Friday';
    break;

    case 6:
        echo 'Satuarday';
        break;

    case 7:
        echo 'Sunday';
    break;
    default:
        echo 'Enter  only between 1-7 Number';
    break;
}

?>