

<!doctype html>
<html>
<head>
  <!--
    
      Author: Santoshi Rimal
      Date: Feb 03 2019
     This webpage is linked with database and will show the basic expenses chart for Nepal Visit.
   -->

  <meta charset="utf-8"/>
  
  <title> Rimal's Travel & Trekking </title>
  <meta charset = "UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style type="text/css">
  table{
	  border-collapse:collapse;
	  width:90%;
	  color:588c7e;
	  font-family:monospace;
	  font-size:20px;
	  text-align:left;
  }
  th{
	  background-color: .#588c7e;
	  color: #660066;
	  
  }
  tr:nth-child(even){background-color: #f2f2f2}
	  
</style>
<style>
h2{
	color:green;
	text-align:center;
}
</style>
  
  <link href="test.css" rel="stylesheet"/>

  <link  rel="stylesheet" href="Nepalcontactus.css" rel="text/css"/>
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


  
 </head>
 

<body>
    
        <nav>
            <ul>
                <li> <a href="home.php"> HOME </a></li> 
				<li><a href="Mountains.php"> MOUNTAINS</a></li> 
                
				<li><a href="Water.php">WATER </a></li>
				<li><a href="PopularPlaces.php">POPULAR PLACES</a></li>
				<li><a href="Culture.php">CULTURE</a></li>
				<li><a href="Food.php">FOOD</a></li>
				<li><a href="BudgetYourTrip.php">BUDGET YOUR TRIP</a></li>
				<li><a href="ContactUs.php">CONTACT US</a></li>
				
				</ul>
				</nav>
				<h2> Travel Price in Nepal</h2>
				<p>How much money will you need in Nepal? NP₨2,901 ($26) is the average daily price for traveling in Nepal.
				The average price of meals in Nepal for one day is NP₨880 ($7.87). The average price of a hotel in Nepal for 
				a couple is NP₨2,818 ($25). Additional pricing is in the table below. 
				These average travel prices have been collected from other travelers to help you plan your own travel budget.</p></br>
				
				
<h2>  Budget Your Trip  </h2>

<table> 
<tr>
<th> ProductID</th>
<th> Name</th>
<th> Description</th>
<th> Price</th>
</tr>

<?php 
// Connect with MYSQL
$con = mysqli_connect('localhost','root','');
//Select database
mysqli_select_db($con,'nepaltravelcost') ;
//select Query
$sql ="SELECT * FROM travelcost";

// Execute the query
$result = mysqli_query($con,$sql);


if($result-> num_rows>0){
	while($row=$result->fetch_assoc()){
		echo"<tr><td>".$row["productID"]."</td><td>".$row["Name"]
		."</td><td>".$row["Description"]."</td><td>".$row["Price"]."</td></tr>";
	}
	echo"</table>";
}
else{
	echo "0 result";
}
$con-> close();
?>
</table>



</body>

<!--php include function is use-->
  <footer>
<?php include('includes/footer.php');
?>

</footer>

</html>