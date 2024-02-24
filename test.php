<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$gender=$_POST['gender'];
$sub=$_POST['sub'];

echo 'Yor name is'. '     '. $name .'<br>';
echo 'Yor email is'. '     '. $email .'<br>';
echo 'Yor password is'. '     '. $pass .'<br>';
echo 'Yor gender is'. '     '. $gender .'<br>';
echo 'Yor Favorite subject'. '<br>';
foreach($sub as $subject){
    echo $subject .'<br>';
}
?>