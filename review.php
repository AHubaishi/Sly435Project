<!DOCTYPE html>
<html>
<style>
.rating{
	color: white;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<head>
<link rel="stylesheet" type = "text/css" href= "style2.css">
</head>
<body>
<?php

  if (isset($_POST['submit']))  {
  

  $admin_email = "ahubaish@umich.edu";
  $email = $_POST['email'];
  $subject = $_POST['firstname']." ". $_POST['lastname'];
  $comment = $_POST['rating'];
  

  mail($admin_email, $subject, $comment, "From:" . $email);
  
  }
  

?>

 <form action="menu2.html" method="post">
<fieldset class="rating">
    <legend>Please rate:</legend>
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title=" Excellent!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Good Work">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title=" Average">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Thats Horrible">1 star</label>
</fieldset>


<h3>Enter Your Information Below</h3>

<div>
 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">
      
  
    <input type="submit" value="Submit">
  
</div>
</form>
</body>
</html>
