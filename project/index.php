<!DOCTYPE html>
<?php
session_start();
include'connect.php';
?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="survey.css">

	<?php

		if (isset($_POST['form'])) 
		{
			$extra = "survey.php";
			header("location: $extra");
		}
		elseif (isset($_POST['results'])) 
		{
			$extra = "results.php";
			header("location: $extra");
		}

	?>
</head>
<body>
	<form align = "center" action="index.php" method = "post">
		<button type ="submit" name ="form" >Fill Out Survey</button>&nbsp&nbsp
		<button type="submit " name="results">View Survey Results</button>

		<style>
			button
			{
				color:  black;
				background-color: forestgreen; 
			   margin-top: 50px;
			   height: 100px;
			   width:50%;
			   font-size: 20px;

			}

			form
			{
				
				padding-top: 5%;
				display: flex;
				align-items: center;
				justify-content: center;
				width: 90%;
				margin: auto;
				margin-top: 10px;
				padding-bottom:20%;
			}
		</style>
		tfuifgfilhglhlj;h;h;;h;h;h
	</form>

</body>
</html>