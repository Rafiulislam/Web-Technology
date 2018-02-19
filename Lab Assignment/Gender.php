<!DOCTYPE HTML>  
<html>
	<head>
		<style>
		.error {color: #FF0000;}
		</style>
	</head>
<body>  
<?php
		$Gender= $GenderErr="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["Gender"])) {
				$GenderErr = "At least One of them must be selected";
  } else 	{
				$Gender = ($_POST["Gender"]);
  }
}

?>


<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
				<p class="error">* required field.</p>
			<input type="radio" name="Gender" value="Male" <?php if(isset($_POST['Gender']) && ($_POST['Gender']=='Male')){ echo "checked"; }?> >Male
			<input type="radio" name="Gender" value="feMale" <?php if(isset($_POST['Gender']) && ($_POST['Gender']=='feMale')){ echo "checked"; }?> >FeMale
			<input type="radio" name="Gender" value="Other"  <?php if(isset($_POST['Gender']) && ($_POST['Gender']=='Other')){ echo "checked"; }?>>other  
			<span class="error">* <?php echo   $GenderErr;?></span>  <br><br>

		
	<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>


<?php
	
	if(isset($_POST['Gender'])){
		echo $_POST['Gender'];
	}
	
?>



