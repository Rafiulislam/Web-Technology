
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
	error_reporting(0);
	$DegreeErr="";
	if(isset($_POST['1']) || isset($_POST['2']) || isset($_POST['3']) || isset($_POST['4']))
	{
		if($_POST['1']=="SSC" && $_POST['2']=="" && $_POST['3']=="" && $_POST['4']=="")
		{
			$DegreeErr= "At least two of them must be selected ! <br/>";
		}
		if($_POST['1']=="" && $_POST['2']=="HSC" && $_POST['3']=="" && $_POST['4']=="")
		{
			$DegreeErr="At least two of them must be selected ! <br/>";
		}
		if($_POST['1']=="" && $_POST['2']=="" && $_POST['3']=="BSc" && $_POST['4']=="")
		{
			$DegreeErr= "At least two of them must be selected ! <br/>";
		}
		if($_POST['1']=="" && $_POST['2']=="" && $_POST['3']=="" && $_POST['4']=="MSc")
		{
			$DegreeErr= "At least two of them must be selected ! <br/>";
		}
		if($_POST['1']=="SSC" && $_POST['2']=="HSC" && $_POST['3']=="" && $_POST['4']=="")
		{
			echo $_POST['1']."<br/>".$_POST['2'];
		}
		if($_POST['1']=="SSC" && $_POST['2']=="" && $_POST['3']=="BSc" && $_POST['4']=="")
		{
			echo $_POST['1']."<br/>".$_POST['3'];
		}
		if($_POST['1']=="SSC" && $_POST['2']=="" && $_POST['3']=="" && $_POST['4']=="MSc")
		{
			echo $_POST['1']."<br/>".$_POST['4'];
		}
		if($_POST['1']=="" && $_POST['2']=="HSC" && $_POST['3']=="BSc" && $_POST['4']=="")
		{
			echo $_POST['2']."<br/>".$_POST['3'];
		}
		if($_POST['1']=="" && $_POST['2']=="HSC" && $_POST['3']=="" && $_POST['4']=="MSc")
		{
			echo $_POST['2']."<br/>".$_POST['4'];
		}
		if($_POST['1']=="" && $_POST['2']=="" && $_POST['3']=="BSc" && $_POST['4']=="MSc")
		{
			echo $_POST['3']."<br/>".$_POST['4'];
		}
		
	}
	
?>



<form action="#" method="POST">
	<fieldset>
		<legend>Degree</legend>
		<p class="error">* required field.</p>
	<input type="checkbox" name="1" value="SSC"> SSC
		<input type="checkbox" name="2" value="HSC"> HSC
		<input type="checkbox" name="3" value="BSc"> BSc
		<input type="checkbox" name="4" value="MSc"> MSc
	
  <span class="error">* <?php echo   $DegreeErr;?></span>
  <br><br>
		
		
		
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>


