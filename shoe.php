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
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Action</th>
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
                            <th><?php echo $data['id'];?></th>
                            <th><?php echo $data['name'];?></th>
                            <th><?php echo $data['email'];?></th>
                            <th><?php echo $data['city'];?></th>
                            <th>
                                <a href="shoe.php">Edit</a>
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