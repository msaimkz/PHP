<?php
$nameerror=$emailerror=$passerror=$gendererror=$suberror ='';
$name=$email=$pass=$gender=$sub = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['name'])){
        $nameerror='Name is required';
    }
    else{
        $name=$_POST['name'];
    }
    if(empty($_POST['email'])){
        $emailerror='email is required';
    }
    else{
        $email=$_POST['email'];
    }
    if(empty($_POST['password'])){
        $passerror='Password is required';
    }
    else{
        $pass=$_POST['password'];
    }
    if(empty($_POST['gender'])){
        $gendererror='gender is required';
    }
    else{
        $gender=$_POST['gender'];
    }
    if(empty($_POST['sub'])){
        $suberror='sub is required';
    }
    else{
        $sub=$_POST['sub'];
    }
} 
else{
    echo 'Name is'. $name;
    echo 'email is'. $email;
    echo 'pass is'. $pass;
    echo 'gender is'. $gender;
    // echo 'sub is'. $sub;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"><br>
        <span>
            <?php 
            echo $nameerror;
             ?>
        </span><br>
        <input type="email" name="email" placeholder="Enter Your email"><br>
        <span>
            <?php 
            echo $emailerror;
             ?>
        </span><br>
        <input type="password" name="password" placeholder="Enter Your password"><br>
        <span>
            <?php 
            echo $passerror;
             ?>
        </span><br>
        <input type="radio" name="gender" value="male">male<br>
        <input type="radio" name="gender" value="female">female<br>
        <span>
            <?php 
            echo $gendererror;
             ?>
        </span><br>
        <input type="checkbox" name="sub[]" value="maths">maths<br>
        <input type="checkbox" name="sub[]" value="Islamiat">Islamiat<br>
        <input type="checkbox" name="sub[]" value="chemistry">chemistry<br>
        <input type="checkbox" name="sub[]" value="english">english<br>
        <span>
            <?php 
            echo $suberror;
             ?>
        </span><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>