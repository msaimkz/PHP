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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th style="color: white;">ID</th>
                            <th style="color: white;">Name</th>
                            <th style="color: white;">Email</th>
                            <th style="color: white;">City</th>
                            <th style="color: white;">Image</th>
                            <th style="color: white;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "confiq.php";
                        $query='Select * from `Student`';
                        $result=mysqli_query($con,$query);
                        while($data=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <th style="color: white;"><?php echo $data['id'];?></th>
                            <th style="color: white;"><?php echo $data['name'];?></th>
                            <th style="color: white;"><?php echo $data['email'];?></th>
                            <th style="color: white;"><?php echo $data['city'];?></th>
                        <th><img src="upload/<?php echo $data['image'];?>" alt="" height="100px" width="150px" style="border-radius: 10px; object-fit: cover;"></th>
                            <th style="color: white;">
                                <a href="update.php?id=<?php echo $data['id'];?>">Edit</a>
                                <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a>
                        </th>
                        </tr>
                        <?php
                        }
                        ?>                      
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>