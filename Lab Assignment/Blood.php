<!DOCTYPE HTML>  
<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
	</head>
<body>  

	<?php
		$blood= $bloodErr="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["blood"])) {
				$bloodErr = "At least One of them must be selected";
  } else 	{
				$blood = ($_POST["blood"]);
  }
}

?>



<form action="#" method="POST">
	<fieldset>
		<legend>Blood Group</legend>
			<p class="error">* required field.</p>
		 <select name="blood">
		  <option value="">Choose</option>
    <option value="o+">o+</option>
    <option value="0-">0-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
  </select>
 <span class="error">* <?php echo   $bloodErr;?></span>  <br><br>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>


	<?php
	
	if(isset($_POST['blood'])){
		echo $_POST['blood'];
	}
?>