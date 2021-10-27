<!DOCTYPE html>
<?php
session_start();
include'connect.php';

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Survey_Form</title>
	<link rel="stylesheet" type="text/css" href="survey.css">

	<?php
		if (isset($_POST['submit'])) 
		{
			// Check if the entered age is between is not less than 5 and not greater than 120
			
			

				if($_POST['age'] >=5 && $_POST['age'] <=120)
				{
					//Check if one or more favourite food checkbox is checked
					if (!empty($_POST['foodOption'])) 
					{
						//assign and insert values to database
						if (!empty($_POST["meals"]) && !empty($_POST["movie"]) && !empty($_POST["tv"]) && !empty($_POST["radio"]) && !empty($_POST["surname"])) 
						{

							$surname = $_POST['surname'];
							$firstName = $_POST['firstName'];
							$contactNum = $_POST['contactNum'];
							$date = $_POST['date'];
							$dateH = date("d/m/yy");
							$age = $_POST['age'];
							$meals = $_POST['meals'];
							$movie = $_POST['movie'];
							$tv = $_POST['tv'];
							$radio = $_POST['radio'];

							//assigning values for the checkbox
							foreach ($_POST['foodOption'] as $food) 
							{
								$food = implode(",", $_POST['foodOption']);
							}

							//Database

							$insert = mysqli_query($db, "insert into foodTable(contactNum,surname,firstName,date,age,favFood,meals,movie,tv,radio) values('$contactNum','$surname','$firstName','$date','$age','".$food."','$meals','$movie','$tv','$radio')");

								if ($insert)
								{
									
									$extra="index.php";
									header("location:$extra");
		 						}



						}
						else
						{
							echo "<script>alert('Please Select At Least one radio box per row');</script>";
						}
					}
					else
					{
						echo "<script>alert('Please Select One or More favourite food');</script>";	
					}

					echo "<script>alert('Contact number already used');</script>";
				}
				else
				{
					echo "<script>alert('Sorry, Your Age Does Not Allow You To Take This Survey');</script>";
				}
				

			}
		
		
	?>
</head>
<body>
	<div class = "heading">
		<h1 id = "head"> Take Our Survey</h1>
		<h2 id = "subheading">Please Fill In Your Personal Details</h2>
	</div>
		<form method="post">
			<div id = "content1">
				<label>Surname</label><br><br>
				<input type="text" name ="surname"class=" input-field" placeholder="Enter your Surname"  title= "Please Enter Your Surname."
				  required value ="<?php  if (isset($_POST['submit'])) 
								 {
								 	echo htmlentities(($_POST['surname']));
								 }?>"><br><br>


				<label>First names</label><br><br>
				<input type="text" name ="firstName"class=" input-field" placeholder="Enter your First names" title="Please Enter Your First Names." required value="<?php if(isset($_POST['submit']))
						 							{
						 								echo htmlentities(($_POST['firstName']));

						 							}?>"><br><br>


				<label>Contact number</label><br><br>
				<input type="tel" name = "contactNum" class="input-field" placeholder="Enter your Contact number" title="Please Enter Your Contact Numbers In This Format 066 068 9026." pattern = "(\+27|0)[6-8][0-9]{8}" minlength="10" maxlength="10" 
				 required value="<?php if(isset($_POST['submit']))
										{
											echo htmlentities(($_POST['contactNum']));

										} ?>"><br><br>


				<label>Date</label><br><br>
				<input type="Date" name="date" class="input-field" placeholder="Enter the Date" title="Please Enter Today's Date." 
				required value="<?php if(isset($_POST['submit']))
								{
									echo htmlentities(($_POST['date']));

								} ?>"><br><br>


				<label >Age</label><br><br>
				<input type="Age" name="age" class="input-field" placeholder="Enter your Age" title="Please Enter Your Age."
				required value = "<?php if(isset($_POST['submit'])) 
										{
											echo htmlentities(($_POST['age']));

										}?>"><br><br>


				<label">What is your favourite food? (You can choose more than 1 answer)</label><br><br>
				
					<input type="checkbox" name="foodOption[]" class= "larger" value="Pizza"><label>	Pizza</label><br><br>
					<input type="checkbox" name="foodOption[]" class= "larger" value="Pasta"><label>	Pasta</label><br><br>
					<input type="checkbox" name="foodOption[]" class= "larger" value="PapandWors"><label>	Pap and Wors</label><br><br>
					<input type="checkbox" name="foodOption[]" class= "larger" value="Chicken"><label>	Chicken stir fry</label><br><br>
					<input type="checkbox" name="foodOption[]" class= "larger" value="Beef"><label>	Beef stir fry</label><br><br>
					<input type="checkbox" name="foodOption[]" class= "larger" value="Other"><label>	Other</label><br><br>

				<br>
				<label">On a scale of 1 to 5 indicate wheter you strongly agree to strongly disagree)</label><br><br>

					<table>
						<tr>
							<th></th>
							<th>I strongly agree(1)</th>
							<th>Agree(2)</th>
							<th>Neutral(3)</th>
							<th>Disagree(4)</th>
							<th>Strongly Disagree(5)</th>
						</tr>

						<tr>
							<th>I like to eat out</th>
							<th><input type="radio" name="meals" value="1"></th>
							<th><input type="radio" name="meals" value="2"></th>
							<th><input type="radio" name="meals" value="3"></th>
							<th><input type="radio" name="meals" value="4"></th>
							<th><input type="radio" name="meals" value="5"></th>
						</tr>

						<tr>
							<th>I like to watch movies</th>
							<th><input type="radio" name="movie" value="1"></th>
							<th><input type="radio" name="movie" value="2"></th>
							<th><input type="radio" name="movie" value="3"></th>
							<th><input type="radio" name="movie" value="4"></th>
							<th><input type="radio" name="movie" value="5"></th>

						</tr>

						<tr>
							<th>I like to Watch Tv </th>
							<th><input type="radio" name="tv"   value="1"> </th>
							<th><input type="radio" name="tv"   value="2"> </th>
							<th><input type="radio" name="tv"   value="3"> </th>
							<th><input type="radio" name="tv"   value="4"> </th>
							<th><input type="radio" name="tv"   value="5"> </th>
						</tr>

						<tr>
							<th>I like to listen to radio </th>
							<th><input type="radio" name="radio" value="1"> </th>
							<th><input type="radio" name="radio" value="2"> </th>
							<th><input type="radio" name="radio" value="3"> </th>
							<th><input type="radio" name="radio" value="4"> </th>
							<th><input type="radio" name="radio" value="5"> </th>

						</tr>
					</table>

				<button type="submit" href = "project/survey.php" name = "submit" ><h3>Submit</button>
			</div>
		</form>
</body>
</html>