<html>
<head>
<title>Update Record Data In MySQL Database Using PHP</title>
<head>
<body>
 
<?php
// Connect with MYSQL
 $con = mysqli_connect('localhost','root','');
//Select database
mysqli_select_db($con,'nepaltravelcost') ;
//select Query
$sql ="SELECT * FROM travelcost";

// Execute the query
$records = mysqli_query($con,$sql);
?>
<h1><center> Budget Your Trip</center> </h1>
<table border="1" layout=auto width=60%  align=center>
<tr> 
<th> ProductID</th>
<th> Name</th>
<th> Description</th>
<th> Price</th>
</tr>
<?php
while ($row = mysqli_fetch_array($records))
{
	
	
	echo "<tr><form action=update.php method=POST>";
	echo"<td> <input type=text name=productid value=".$row['productID']."'></td>";
    echo"<td> <input type=text name=name value=".$row['Name']."'></td>";
    echo"<td> <input type=text name=description value=".$row['Description']."'></td>";
    echo"<td> <input type=text name=price value=".$row['Price']."'></td>";
	
	echo "</form></tr> ";

}


?>


		 
</body>
</html>