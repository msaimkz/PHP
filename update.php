<?php
include 'header.php'
?>
<?php
include 'confiq.php';
$id = $_GET["id"];
$fetch="select * from `Student` where id ='$id'";
$res=mysqli_query($con,$fetch);
$row=mysqli_fetch_assoc($res);
if(isset($_POST['sumit'])){
if(empty($_POST['name'])){
  echo "<script>alert('Fill All Field')</script>";
}
elseif(empty($_POST['email'])){
  echo "<script>alert('Fill All Field')</script>";
}
elseif(empty($_POST['city'])){
  echo "<script>alert('Fill All Field')</script>";
}

else{
  $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $img = $_FILES['image']['name'];
    $temname= $_FILES['image']['tmp_name'];
    $upload= "upload/" .$img;
    move_uploaded_file($temname,$upload);
    if($temname != ""){
    $query= "update `Student` set `name`='$name', `email`='$email', `city`='$city' , `image`='$img' where id='$id' ";
    }
    else{
    $query= "update `Student` set `name`='$name', `email`='$email', `city`='$city'  where id='$id' ";
    }
    $result=mysqli_query($con,$query);

    if($result){
        echo "<script>alert('Record add')
        window.location.hrep='index.php'
        </script>";
    }
    else{
        echo "<script>alert('falied')</script>";

    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-8">
            
            
<form method="post" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group row">
      <div class="col-sm-10">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">name</label>
      <input type="text" name="name"  value="<?php echo $row['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4"> City</label>
      <input type="text"  name="city" class="form-control"  value="<?php echo $row['city']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter City">
    </div>

    <img src="upload/<?php echo $row["image"]?>" alt="" height="100px"> <br><br>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4"> Image</label>
      <input type="file"  name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary m-3" name="sumit">Submit</button>
  </fieldset>
</form>
</body>
</html>
<?php
 include 'footer.php'
?>