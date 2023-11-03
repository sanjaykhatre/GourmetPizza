<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    echo 'start';
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $name, $address, $mobile, $email, $password;

    $sql = "INSERT INTO `member`(name,address,mobile,email,password) 
    VALUES ('$name','$address', '$mobile', '$email','$password')
    ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:home.php');
    } else {
        echo 'connected unsuccessfully';
        die(mysqli_error($con));
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Fun with Pizzas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="header" style="background-color: gray; width:100%; min-height: 20%; min-height: 25%; padding: 10px; display:flex; justify-content: space-between; margin-bottom: 15px;">
            <div style="font-weight: bold; color: palegreen; font-size: 20px;"><a style=" text-decoration:none; color: palegreen; " href="home.php"> GOURMENT PIZZA</a> </div>
            <div style="font-weight: bold; color: black; font-size: 15px;">Hi, Members</div>
            <div style="font-weight: bold; color: white; font-size: 20px;">LogOut</div>
        </div>
        <h4>Add Memeber Info</h4>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="name">
                <label for="floatingInput">Name </label>
            </div>
            <div class="form-floating">
                <input type="address" name="address" class="form-control" id="floatingInput" placeholder="address">
                <label for="floatingInput">Address</label>
            </div>
            <div class="form-floating">
                <input type="mobile" name="mobile" class="form-control" id="floatingInput" placeholder="mobile">
                <label for="floatingInput">Mobile</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <br>
            <div class="form-floating">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
</body>

</html>