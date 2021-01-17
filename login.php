<?php include('server.php') ?>
<html>
<head>

<title>Login</title>
</head>

<body>
<div style="text-align:center">
<h2>Login </h2>
<p>Please enter your login credentials.</p>
<hr>
<form action="home.php" method="POST" align="center">
<?php include('error.php'); ?>
<br>
Email:<input type="email" name="email" placeholder="ananthu@example.com" pattern=".+@gmail.com"  ><br><br><br>
Password :<input type="password" name="password"><br><br>
<hr>

<input type="Submit"  value="Submit">

</form>
</div>
</body>
</html>


