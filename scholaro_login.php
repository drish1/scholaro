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
.box{
    width:700px;
    height:400px;
    border:solid;
    background-image:url("graduation.jpg");
    background-repeat:no-repeat;
    margin-top:300px;
    margin-left:600px;
    box-shadow:10px 10px 7px 10px black;
    border-radius:20px;
}
form{
    margin-top:100px;
    font-weight:bold;
    font-size:28px;
    color:white;
    width:200px;
}
.size{
    width:400px;
    height:50px;
    margin-left:-90px;
    border-radius:8px;
    font-size:20px;
}
.submit{
    width:300px;
    height:40px;
    font-size:25px;
    margin-top:20px;
    margin-left:-35px;
    border-radius:8px;

}
</style>
</head>
<body>
<div class="box">
<center>
<form method="post">
User Name:<br>
<input class="size" type="text" name="name" value="" placeholder="Enter user firstname"><br>
Password:<br>
<input class="size" type="password" name="password" value="" placeholder="Enter password"><br>
<input class="submit" type="submit" name="login" value="Login">

</form>
</center>
</div>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $password_ = $_POST['password'];
    $que= mysqli_query($conn,"SELECT * from User where fname='$name' and password ='$password_'");
    if(mysqli_num_rows($que)>0)
    {
        echo "<script> alert('login ok')</script>";
        echo "<script> window.open('new project.php','_self')</script>";
    }
    else{
        echo"<script> alert('username and password incorrect')</script>";
    }
}
?>