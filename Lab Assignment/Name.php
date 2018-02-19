<!DOCTYPE HTML>  
<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
	</head>
	<body> 
</html> 

<?php 
 $str =$nameErr=$name=" ";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST['name'])) {	
				  $nameErr = "Name is required"; 
				    unset($_POST['name']);
				}
			else if (isset($_POST['name'])){
					 $str = $_POST['name'];
			     if(str_word_count($str)<2)
		   {
			   $nameErr = "Must contain at least two words !<br/>";
			       $name = ($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Can contain a-z, A-Z, period, dash only"; 
									}
							}
					}
				}
?>
<form action="#" method="POST">
	<fieldset>
		<legend>NAME</legend>
			<p><span class="error">* required field.</span></p>
					Name: <input type="text" name="name" value="<?php echo $name;?>">
							<span class="error">* <?php echo $nameErr;?></span><br><br>
										<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>

<?php
	if(isset($_POST['name'])){
		echo $_POST['name'];
	}
?>