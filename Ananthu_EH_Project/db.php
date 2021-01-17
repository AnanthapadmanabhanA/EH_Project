<?php
session_start();

$con=mysqli_connect("localhost","root");

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

mysqli_select_db($con,'ethical_hacking');

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['pwd'];

	$q = "select * from registration where name = '$username' && email = '$email' && password = '$password'";

$result =	mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"Duplicate data";
}else{
	$qy= "insert into registration(name , email , password) values ('$name', '$email', '$password')";

	mysqli_query($con, $qy);
}

?>
