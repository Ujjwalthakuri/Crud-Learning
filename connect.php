<?php
$con=new mysqli('localhost', 'root', '','example');
if(!$con){
    die("error detected".mysqli_error($con));
}

?>