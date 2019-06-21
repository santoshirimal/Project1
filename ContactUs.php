<!DOCTYPE html>
<html>
<head>
  <!--
      ContactUS  Page 
      Author: Santoshi Rimal
      Date: Feb 03 2019
      This file includes contact form and google map of this company office . 
   -->

  <meta charset="utf-8"/>
  
  <title> Rimal's Travel & Trekking </title>
  <meta charset = "UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
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
				
     
<body>

<?php
function validateInput($data, $fieldName) {
 global $errorCount;
 if (empty($data)) {
 echo "\"$fieldName\" is a required field.<br/>\n";
 ++$errorCount;
 $retval = "";
 } else { // Only clean up the input if it isn't
 // empty
 $retval = trim($data);
 $retval = stripslashes($retval);
 }
 return($retval); 
 }
 
 function validateEmail($data, $fieldName) {
 global $errorCount;
 if (empty($data)) {
 echo "\"$fieldName\" is a required
 field.<br />\n";
 ++$errorCount;
 $retval = "";
 } else { // Only clean up the input if it isn't
 // empty
 $retval = trim($data);
 $retval = stripslashes($retval);
 $pattern = "/^[\w-]+(\.[\w-]+)*@" .
 "[\w-]+(\.[\w-]+)*" .
 "(\.[a-z]{2,})$/i";
 if (preg_match($pattern, $retval)==0) {
 echo "\"$fieldName\" is not a valid e-mail
 address.<br/>\n";
 ++$errorCount;
 }
 }
 return($retval); 
 }
 // Validating and sanitizing data
 
 
 function displayForm($Sender, $Email, $Subject,
$Message) {
?>
<div class="container">
<form id="contact" action="ContactUs.php"
 method="post">
 <center><h3> Quick Contact</h3></center>
 <center><h4> Send US Your Queries And Suggestions,We Will Reach Back to You Within 24 hours </h4></center>

 <div >
<p>Your Name: <input type="text" name="Sender"value="
<?php
 echo $Sender; ?>" /></p></div>
 <div class="col-75">
<p>Your E-mail: <input type="text" name="Email"
 value="<?php echo $Email; ?>" /></p></div>
 
  <div >
<p>Subject: <input type="text" name="Subject"
value="<?php
 echo $Subject; ?>" /></p></div>
  <div 
<p>Message:<br />
<textarea name="Message" style="height:100px"><?php echo $Message;
 ?></textarea></p></div>
 
  <div >
<center><p><input type="reset" value="Clear Form" />&nbsp;
 &nbsp;<input type="submit" name="Submit"
 value="Send Form" /></p></center></div>
</form>
</div>
<?php
}

$ShowForm = TRUE;
$errorCount = 0;
$Sender = "";
$Email = "";
$Subject = "";
$Message = "";

if (isset($_POST['Submit'])) {
 $Sender =
 validateInput($_POST['Sender'],"Your Name");
 $Email =
 validateEmail($_POST['Email'],"Your E-mail");
 $Subject =
 validateInput($_POST['Subject'],"Subject");
 $Message =
 validateInput($_POST['Message'],"Message");
 
 if ($errorCount==0)
 $ShowForm = FALSE;
 else
 $ShowForm = TRUE;
}

if ($ShowForm == TRUE) {
 if ($errorCount>0) // if there were errors
 echo "<p>Please re-enter the form
 information below.</p>\n";
 displayForm($Sender, $Email, $Subject,
 $Message);
}
else {
 $SenderAddress = "$Sender <$Email>";
 $Headers = "From: $SenderAddress\nCC:
 $SenderAddress\n";
 // Substitute your own email address for
 // recipient@example.com
 
 $result = mail("sanrim123@gmail.com",
 $Subject, $Message, $Headers);
 if ($result)
 echo "<p>Your message has been sent. Thank you, "
 . $Sender . ".</p>\n";
 else
 echo "<p>There was an error sending your
 message, " .
 $Sender . ".</p>\n";
}
 
?>

<center><div id="map" </div></center>

<script>
function initMap(){
	var location= {lat: 41.24, lag: -81.84};
	var map = new google.maps.Map(document.getElementById("map"),
	{
		zoom:4,
		center:location
});
}


</script>

<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.467891597415!2d-81.81651948469039!3d41.23336492927869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830c12c52ea6be7%3A0xdd05b4174c97e8e5!2s3564+Brunswick+Lake+Pkwy%2C+Brunswick%2C+OH+44212!5e0!3m2!1sen!2sus!4v1551269312578" width=50%, height=350px frameborder="0" style="border:0" allowfullscreen></iframe></center>
<footer>
<?php include('includes/footer.php');
?>
</footer>
</body>
</html>

