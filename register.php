


<html>
<title> Registration  </title>
<body>
<div style="text-align:center">

<div class="container">
<h1>Register</h1>
<p>Please fill in this form to create new account.</p>
<hr>

<form action="home.php" method="POST">

<label for="username"><b>User Name</b></label> 
<input type="text" placeholder="Enter User Name" name="username" id="username" value="<?php echo $username; ?>" required> <br>

<label for="email"><b>Email</b></label> 
<input type="email" name="email" placeholder="ananthu@example.com" pattern=".+@gmail.com" id="email" value="<?php echo $email; ?>" required> <br>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" id="psw" required onkeyup='check();' /> <br>

<label for="psw-repeat"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required onkeyup='check();' /> 
<span id='message'></span> <br>
<hr>
   
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<button type="submit" class="registerbtn">Register</button>
</div>
<hr>
  
<div class="container signin">
<p>Already have an account? <a href="login.php">Login</a>.</p>
    
</div>
</form>

<script>

var check = function() {
  if (document.getElementById('psw').value ==
    document.getElementById('psw-repeat').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

</script>

</body>
</html>

