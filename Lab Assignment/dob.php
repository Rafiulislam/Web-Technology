
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
				$dd1=$mm1=$yy1= $ddErr=$mmErr=$yyErr=" ";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty(($_POST["dd"]) ||($_POST["mm"])||($_POST["yy"]))) {
				$ddErr= "Select in a Valid format (like:dd-mm-yy)";  }
   else { 
   $dd1= $_POST['dd'];
  $mm1= ($_POST['mm']);
  $yy1=($_POST['yy']); 

}
		}
	
	

?>

<?php error_reporting(0);?>
<form action="#" method="post">
	<fieldset>
		<legend>DOB</legend>
			<p class="error">* required field.</p>
		dd
		<select name="dd">
			<option value=" " ></option>
			<option value="01" <?php if($_POST['dd'] == "01"){ echo "selected";} ?>>01</option>
			<option value="02" <?php if($_POST['dd'] == "02"){ echo "selected";} ?>>02</option>
			<option value="03" <?php if($_POST['dd'] == "03"){ echo "selected";} ?>>03</option>
			<option value="04" <?php if($_POST['dd'] == "04"){ echo "selected";} ?>>04</option>
				<option value="05" <?php if($_POST['dd'] == "05"){ echo "selected";} ?>>05</option>
					<option value="06" <?php if($_POST['dd'] == "06"){ echo "selected";} ?>>06</option>
						<option value="07" <?php if($_POST['dd'] == "07"){ echo "selected";} ?>>07</option>
							<option value="08" <?php if($_POST['dd'] == "08"){ echo "selected";} ?>>08</option>
								<option value="09" <?php if($_POST['dd'] == "09"){ echo "selected";} ?>>09</option>
								<option value="10" <?php if($_POST['dd'] == "10"){ echo "selected";} ?>>10</option>
		</select>
		mm
		<select name="mm">
			<option value=" " ></option>
			<option value="01" <?php if($_POST['mm'] == "01"){ echo "selected";} ?>>01</option>
			<option value="02" <?php if($_POST['mm'] == "02"){ echo "selected";} ?>>02</option>
			<option value="03" <?php if($_POST['mm'] == "03"){ echo "selected";} ?>>03</option>
			<option value="04" <?php if($_POST['mm'] == "04"){ echo "selected";} ?>>04</option>
				<option value="05" <?php if($_POST['mm'] == "05"){ echo "selected";} ?>>05</option>
			<option value="06" <?php if($_POST['mm'] == "06"){ echo "selected";} ?>>06</option>
			<option value="07" <?php if($_POST['mm'] == "07"){ echo "selected";} ?>>07</option>
			<option value="08" <?php if($_POST['mm'] == "08"){ echo "selected";} ?>>08</option>
				<option value="09" <?php if($_POST['mm'] == "09"){ echo "selected";} ?>>09</option>
			<option value="10" <?php if($_POST['mm'] == "10"){ echo "selected";} ?>>10</option>
					<option value="11" <?php if($_POST['mm'] == "11"){ echo "selected";} ?>>11</option>
			<option value="12" <?php if($_POST['mm'] == "12"){ echo "selected";} ?>>12</option>
		</select>
		yy
		<select name="yy">
			<option value=" " ></option>
			<option value="2000" <?php if($_POST['yy'] == "2000"){ echo "selected";} ?>>2000</option>
			<option value="2001" <?php if($_POST['yy'] == "2001"){ echo "selected";} ?>>2001</option>
			<option value="2002" <?php if($_POST['yy'] == "2002"){ echo "selected";} ?>>2002</option>
			<option value="2003" <?php if($_POST['yy'] == "2003"){ echo "selected";} ?>>2003</option>
		</select>
			 <span class="error">* <?php echo  $ddErr;?></span>
		<br/>
		
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>




	<?php
	
	if(isset($_POST['dd']) && ($_POST['mm']) &&($_POST['yy']) ){
		echo       $_POST['dd']." -".$_POST['mm']."- ".$_POST['yy']  ;                                    ;
	}
?>