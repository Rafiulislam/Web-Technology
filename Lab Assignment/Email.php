<!DOCTYPE HTML>  
<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
	</head>
<body>  
<?php
$emailErr =$email=" ";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['email'])) {
			$emailErr = "Email is required";
  } else {
			$email = test_input($_POST['email']);
				echo $_POST['email'];

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format"; 
    }
  }
 }
			
			function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

 ?>

<form action="#" method="POST">
	<fieldset>
	<legend>Email</legend>
			<p class="error">* required field.</p>
					E-mail: <input type="text"   name="email"   value="<?php echo $email;?>">
					<span class="error">* <?php echo $emailErr;?></span> <br><br/>
					<input type="submit" name="submit" value="Submit" >
			<hr/>
	</fieldset>
</form>

