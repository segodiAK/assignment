<!DOCTYPE html>
<?php
  session_start(); 
  include'connect.php';
?>

<html>
  <head>
    <?php 

      //CALCULATIONS

      $tot= mysqli_query($db,"SELECT COUNT(*) as total FROM foodTable");
      $count=mysqli_fetch_assoc($tot);

      $total = $count['total']; 

      
      $AVG= mysqli_query($db,"SELECT ROUND(AVG(age),1) as average FROM foodTable");
      $count=mysqli_fetch_assoc($AVG);

       
      $avg  =$count['average'];


      $youngest= mysqli_query($db,"SELECT Min(age) as youngest FROM foodTable");
      $count=mysqli_fetch_assoc($youngest);

       
      $youngest  =$count['youngest'];


      $oldest= mysqli_query($db,"SELECT Max(age) as oldest FROM foodTable");
      $count=mysqli_fetch_assoc($oldest);

       
      $oldest  =$count['oldest'];


      $pizza= mysqli_query($db,"SELECT COUNT(favFood) as pizza FROM foodTable where favFood LIKE '%pizza%'");
      $count=mysqli_fetch_assoc($pizza);

       
      $pizza  =$count['pizza'] ;
      $pizPercentage =round( ($pizza / $total * 100),1);

      $pasta= mysqli_query($db,"SELECT COUNT(favFood) as pasta FROM foodTable where favFood LIKE '%pasta%'");
      $count=mysqli_fetch_assoc($pasta);

       
      $pasta  =$count['pasta'] ;
      $pastaPercentage = round(($pasta / $total * 100),1);


      $papWorsPercentage = mysqli_query($db,"SELECT COUNT(favFood) as papWorsPercentage FROM foodTable where favFood LIKE '%PapAndWors%'");
      $count=mysqli_fetch_assoc($papWorsPercentage);

       
      $papWorsPercentage  =$count['papWorsPercentage'] ;
      $papWorsPercentage = round(($papWorsPercentage / $total * 100),1);


      $mealCount= mysqli_query($db,"SELECT COUNT(meals) as meal FROM foodTable where meals= 1 or meals = 2 or meals = 3");
      $count=mysqli_fetch_assoc($mealCount);

       
      $mealCount  =$count['meal'] ;
       

      $movieCount= mysqli_query($db,"SELECT COUNT(movie) as movie FROM foodTable where movie = 1 or movie = 2 or movie = 3");
      $count=mysqli_fetch_assoc($movieCount);

       
      $movieCount  =$count['movie'] ;


      $tvCount= mysqli_query($db,"SELECT COUNT(tv) as tv FROM foodTable where tv = 1 or tv = 2 or tv = 3");
      $count=mysqli_fetch_assoc($tvCount);

       
      $tvCount  =$count['tv'] ;


      $radioCount= mysqli_query($db,"SELECT COUNT(radio) as radio FROM foodTable where radio = 1 or radio = 2 or radio = 3");
      $count=mysqli_fetch_assoc($radioCount);

       
      $radioCount  =$count['radio'] ;
      

?>

</head>
  <body >
  	   <br><br><br>
       <table style = "txt/css" width=26%>
	    
    		<tr>
    			<th>Ratings</th>
    			<th>Results.....</th>
    		</tr>

            <tr> 	
            <th>Total Number Of Surveys Taken </th>
            <th><?php echo $total; ?></th>
            </tr>

            <tr>
            <th>Average Age </th>
            <th><?php echo $avg; ?></th>
            </tr>

            <tr>
            <th>Oldest Person Who Took The Survey </th>
            <th><?php echo $oldest; ?></th>
            </tr>

            <tr>
            <th>Youngest Person Who Took The Survey </th>
            <th><?php echo $youngest; ?></th>
            </tr>


    	</table>

    		<br>

          <table style = "txt/css" width=26%>
    	    
    		<tr>
    			<th>Favourite Food Ratings</th>
    			<th>Results.....</th>
    		</tr>

            <tr> 	
            <th>Percentage Of People Who Like Pizza</th>
            <th><?php echo $pizPercentage; ?></th>
            </tr>

            <tr>
            <th>Percentage Of People Who Like Pasta </th>
            <th><?php echo $pastaPercentage; ?></th>
            </tr>

            <tr>
            <th>Percentage Of People<br>Who Like Pap and Wors </th>
            <th><?php echo $papWorsPercentage; ?></th>
            </tr>

	       </table>
      <br>

	 <table style = "txt/css" width=26%>
	    
		<tr>
			<th>Peoples Ratings</th>
			<th>Results.....</th>
		</tr>

        <tr> 	
        <th>People Who Like To eat Out</th>
        <th><?php echo $mealCount; ?></th>
        </tr>

        <tr>
        <th>People Who Like To Watch Movies </th>
        <th><?php echo $movieCount; ?></th>
        </tr>

        <tr>
        <th>People Who Like To Watch Tv  </th>
        <th><?php echo $tvCount; ?></th>
        </tr>

        <tr>
        <th>People Who Like To Listen To Radio  </th>
        <th><?php echo $radioCount; ?></th>
        </tr>

	</table>

<style >
	
	table, tr, th  {

  border: 2px solid black;
  align-content: center;
  line-height: 30px;
  column-width: 150px;
  background-color:  skyblue;
  color: black;
	
	}

</style>

<br>

 <form action="index.php" method = post>
   <button type="submit " name="submit">BACK</button>
</form>

 <style type="text/css">

 body{

  background-image: url(image/food.jpg);
  background-attachment: fixed;
  background-size: cover;

  color: white;
 }
  
  button {
    
   color:  black; 
   
   height: 40px;
   width:500px;
   margin-left: 0px;
   background-color: green;
   cursor: pointer;
  }

  button:hover{

  background-color: skyblue;
  transition: 0.6s;

 </style>
 



</body>
</html>