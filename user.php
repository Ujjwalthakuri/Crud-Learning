<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into crud (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "Data inserter";
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
        <form method='post'>
        <div class="form-group">
            <label>Name:</label>
            <input type='text' class='form-control' placeholder='Enter your name' name='name'>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type='email' class='form-control' placeholder='Enter your email' name='email'>
        </div>
        <div class="form-group">
            <label>Mobile:</label>
            <input type='text' class='form-control' placeholder='Enter your number' name='mobile'>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type='password' class='form-control' placeholder='Enter your password' name='password'>
        </div>
        <button type='submit' class='btnbtn-primary' name='submit'>Submit</button>
    </form>
    </div>
</body>
</html>