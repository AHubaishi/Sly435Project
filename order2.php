
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="keywords" content= "CIS Restaurant, LunchMenu">
	
	<meta name="description" content= "CIS Restaurant: Lunch Menu">
	
	<title> CIS restaurant Menu</title>
	
	<link rel="stylesheet" type = "text/css" href= "style2.css">
	
	
</head>

<body>
		
	<div id="container">
	<p><img src="header.jpg" alt="photo of inside of CIS 122 restaurant"></p>
	<a href="review.php"> Click Here</a> to rate your experince here. 
	
	<?php
	$firstname = $_POST['firstname'];	
	$lastname = $_POST['lastname'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$phone3 = $_POST['phone3'];
	$email = $_POST['email'];
	$CardType = $_POST['CardType'];
	$CardNumber = $_POST['CardNumber'];
	$zipcode = $_POST['zipcode'];
	$subtotal3 = $_POST['subtotal3'];
		if (!empty($_POST['couponcode']))
			$couponcode=$_POST['couponcode'];
		else
			$couponcode='';
	$date = date('m-d-y');
	$servername = "localhost";
	$username = "root";
	$password = "Thisiscoo1";
	$dbname = "reasturant";
	$phoneFull = $phone1." ".$phone2." ". $phone3;
	$fullname = $firstname ." ". $lastname;
	$formattedNum = number_format($subtotal3, 2);
	$formattedNum = "$".$formattedNum;
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql2="INSERT INTO orders (Name,Phone, Email, zipcode, date, total)
VALUES ('$fullname', '$phoneFull','$email','$zipcode','$date', '$formattedNum')";
	$conn->query($sql2);
	try{
	$con= new PDO('mysql:host=localhost;dbname=reasturant', "root", "Thisiscoo1");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM orders";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> ";
  foreach ($row as $field => $value){
   print " <th>$field</th> ";
  } // end foreach
  print " </tr> ";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
	
	?>
	
	</div>

</body>

</html>