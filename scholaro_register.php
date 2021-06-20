<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Scholaro_next";
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die('could not connect:' .mysql_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
div{
    width:900px;
    height:700px;
    border:solid;
    background-image:url("graduation.jpg");
    background-repeat:no-repeat;
    margin-top:100px;
    margin-left:500px;
    box-shadow:15px 15px 8px 15px black;
    border-radius:20px;
    background-size:cover;
}
form{
    margin-top:100px;
    font-weight:bold;
    font-size:28px;
    color:white;
    width:200px;
    margin-top:10px;
}
.size{
    width:400px;
    height:25px;
    margin-left:-90px;
    border-radius:8px;
    font-size:20px;
    margin-top:-10px;
}
.submit{
    width:300px;
    height:40px;
    font-size:20px;
    margin-left:-35px;
    border-radius:8px;

}
h1{
    color:white;
    font-size:40px;
    font-family:"Times New Roman", Times, serif;
    text-decoration:underline;
}
</style>
</head>
<body>
<div>
<center>
<h1>New User Registration</h1>
<form method="post" action="scholaro_register.php">
First name: <br>
<input class="size" type="text" name="first_name" placeholder="Enter First Name" value="" required>
<br>
Last name:<br>
<input class="size" type="text" name="last_name" placeholder="Enter Last Name" value="" required>
<br>
Age:<br>
<input class="size" type="text" name="age" placeholder="Enter age" value="" required>
<br>
Address:<br>
<input class="size" type="text" name="address" value="" placeholder="Enter address" required>
<br>
Email id:<br>
<input class="size" type="email" name="email" placeholder="Enter email" value="" required>
<br>
Password:<br>
<input class="size" type="text" name="password" placeholder="Enter password" value="" required>
<br>
Mobile Number:<br>
<input class="size" type="text" name="phone" placeholder="Enter mobile no" value="" required>
<br><br>
<input class="submit" type="submit" name="save" value="Submit">
</form></center>
</div>
</body>
</html>
<?php
if(isset($_POST['save']))
{
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $sql = "insert into User (fname,lname,age,email,password,address,phone)values('$first_name','$last_name','$age','$email','$password','$address','$phone')";
    if(mysqli_query($conn,$sql)){
        echo "new record created";
    }else{
        echo "error:" .$sql ." " .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>