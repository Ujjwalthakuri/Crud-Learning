<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update crud set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
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
            <input type='text' class='form-control' placeholder='Enter your name' name='name' value=<?php echo $name;?>>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type='email' class='form-control' placeholder='Enter your email' name='email' value=<?php echo $email;?>>
        </div>
        <div class="form-group">
            <label>Mobile:</label>
            <input type='text' class='form-control' placeholder='Enter your number' name='mobile'value=<?php echo $mobile;?>>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type='password' class='form-control' placeholder='Enter your password' name='password'value=<?php echo $password;?>>
        </div>
        <button type='submit' class='btnbtn-primary' name='submit'>update</button>
    </form>
    </div>
</body>
</html>