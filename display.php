<?php
include 'connect.php';
?>
<html>
    <head>
        <title>Crud operation</title>
</head>
<body>
<div class="container">
    <button class='btn'><a href='user.php'>Add User</a></button>
    <table class='table'>
    <thead>
    <tr>
    <th>s.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Password</th>
    <th>Operation</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $sql="Select * from crud";
        $result=mysqli_query($con, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['Name'];
            $email=$row['Email'];
            $mobile=$row['Mobile'];
            $password=$row['Password'];
            echo'<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button> <a href="update.php?updateid='.$id.'">Update</a> </button>
            <button> <a href="delete.php?deleteid='.$id.'">Delete</a> </button>
        </td>
            </tr>';
        }
    }  
        ?>
    </tbody>
</table>
</div>
</body>
    </html>