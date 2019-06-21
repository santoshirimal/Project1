<?php
 $con = mysqli_connect('localhost','root','');
 if(!$con)
 {
	 echo 'Not connected To server';
 }
 if (!mysqli_select_db($con,'nepaltravelcost'))
 {
	 echo "Database Not Selected";
 }
 $ProductID = $_POST['productid'];
 $Name = $_POST['name'];
 $Description = $_POST['description'];
 $Price = $_POST['price'];
 
 $sql = "INSERT INTO travelcost (productID,Name,Description,Price) VALUES ('$ProductID','$Name','$Description','$Price')";
 if (!mysqli_query($con,$sql))
 {
	 echo 'Not Inserted';
 }
 else
 {
	 echo 'Inserted';
 }
 header("refresh:2; url=insertdata.html")
?>

