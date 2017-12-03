
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="keywords" content= "CIS Restaurant, LunchMenu">
	
	<meta name="description" content= "CIS Restaurant: Lunch Menu">
	
	<title> CIS restaurant Menu</title>
	
	<link rel="stylesheet" type = "text/css" href= "style2.css">
	
	<script src="creditcard.js" type="text/javascript"></script>
	<script src="functions.js" type="text/javascript"></script>
	<script type="text/javascript">
	<!--
	function testCreditCard () {
	if (checkCreditCard (document.getElementById('CardNumber').value,document.getElementById('CardType').value))
	{
	//alert ("Credit card has a valid format")
	}
	else {
	//alert (ccErrors[ccErrorNo]);
	document.getElementById("CardNumber").value = '';
	return false;
	}
	}
	//-->
	</script>

	
	

</head>

<body>
		
	<div id="container">
	
	
	<p><img src="header.jpg" alt="photo of inside of CIS 122 restaurant"></p>
	<h2 class = "CenterBlue"> Please review and submit your order</h2>
	<?php
	echo"<form action =\"order2.php\" method=\"post\" id=\"myform\">";
	
	$boneless=$_POST['boneless'];
	$nachos=$_POST['nachos'];
	$american=$_POST['american'];
	$chicken=$_POST['chicken'];
	$alaskan=$_POST['alaskan'];
	$mushroom=$_POST['mushroom'];
	$fries=$_POST['fries'];
	$potatoes=$_POST['potatoes'];
	$cheesecake=$_POST['cheesecake'];
	$macandcheese=$_POST['macandcheese'];
	$bacon=$_POST['bacon'];
	$milkshake=$_POST['milkshake'];
	$cookie=$_POST['cookie'];
	$brownie=$_POST['brownie'];
	$couponcode =$_POST['couponcode'];
	
	
	echo "<table class=\"tablectr\">";
	echo "<tr><th>Menu Item</th><th>Quantity</th><th>Price</th><th>Sub Total</th></tr>";
	
	$subtotal=0;
	if ($cookie > 0) { $subtotal=$subtotal+$cookie*1.99;
	echo "<tr><td>Premium cookie </td><td>$cookie</td><td>$1.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"cookie\" value=\"".$cookie. "\">";
	}
	if ($milkshake > 0) { $subtotal=$subtotal+$milkshake*1.99;
	echo "<tr><td>Premium Milkshake </td><td>$milkshake</td><td>$1.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"milkshake\" value=\"".$milkshake. "\">";
	}
	
	if ($bacon > 0) { $subtotal=$subtotal+$bacon*1.99;
	echo "<tr><td>Bacon </td><td>$bacon</td><td>$1.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"bacon\" value=\"".$bacon. "\">";
	}
	
	if ($macandcheese > 0) { $subtotal=$subtotal+$macandcheese*3.99;
	echo "<tr><td>Mac & Cheese</td><td>$macandcheese</td><td>$3.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"macandcheese\" value=\"".$macandcheese. "\">";
	}
	if ($boneless > 0) { $subtotal=$subtotal+$boneless*7.99;
	echo "<tr><td>Boneless Wings and Skins Sampler</td><td>$boneless</td><td>$7.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"boneless\" value=\"".$boneless. "\">";
	}
	
	
	if ($nachos>0) { $subtotal = $subtotal+$nachos*7.99;
	echo "<tr><td> Three Cheese Nachos</td><td>$nachos</td> <td>$7.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"nachos\" value=\"".$nachos. "\">";
	}
	
	if ($american>0) { $subtotal=$subtotal+$american*15.99;
	echo "<tr><td> Great American Burger</td><td>$american</td> <td>$15.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"american\" value=\"".$american. "\">";
	}
	
	if ($chicken>0) { $subtotal=$subtotal+$chicken*12.99;
	echo "<tr><td> Grilled Chicken Burge</td><td>$chicken</td> <td>$12.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"chicken\" value=\"".$chicken. "\">";
	}
	
	if ($alaskan>0) { $subtotal=$subtotal+$alaskan*11.99;
	echo "<tr><td> Alaskan Cod Burger</td><td>$alaskan</td> <td>$11.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"alaskan\" value=\"".$alaskan. "\">";
	}
	
	if ($mushroom>0) { $subtotal=$subtotal+$mushroom*13.99;
	echo "<tr><td> Mushroom Onion Burger</td><td>$mushroom</td> <td>$13.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"mushroom\" value=\"".$mushroom. "\">";
	}
	
	if ($fries>0) { $subtotal=$subtotal+$fries*4.99;
	echo "<tr><td> Chilli Cheese Fries</td><td>$fries</td> <td>$4.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"fries\" value=\"".$fries. "\">";
	}
	
	if ($potatoes>0) { $subtotal=$subtotal+$potatoes*3.99;
	echo "<tr><td> Mashed Potatoes</td><td>$potatoes</td> <td>$3.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"potatoes\" value=\"".$potatoes. "\">";
	}
	
	if ($cheesecake>0) { $subtotal=$subtotal+$cheesecake*1.99;
	echo "<tr><td> New York Style CheeseCake</td><td>$cheesecake</td> <td>$1.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"cheesecake\" value=\"".$cheesecake. "\">";
	}
	
	if ($brownie>0) { $subtotal=$subtotal+$brownie*1.99;
	echo "<tr><td> Brownie Explosion </td><td>$brownie</td> <td>$1.99</td><td>$" .number_format($subtotal,2). "</td></tr>";
	echo "<input type=\"hidden\" name =\"brownie\" value=\"".$brownie. "\">";
	}
	
	echo "<tr><td></td><td colspan=\"2\"> Order Total</td><td>$" .number_format($subtotal,2)."</td></tr>";
	
	$subtotal2=$subtotal*1.06;
	echo "<tr><td></td><td colspan=\"2\"> Plus 6% Taxes </td><td>$".number_format($subtotal2,2) ."</td></tr>";
	
	
	
	if($couponcode =="2345" || $couponcode == "6789") 
	{
		$subtotal3 = $subtotal2 *.9;
		echo "<tr><td></td><th colspan=\"2\"> Total with 10% Discount</th><th>$".number_format($subtotal3,2) ."</th></tr>";
		echo "<input type=\"hidden\" name =\"couponcode\" value=\"".$couponcode. "\">";
		echo "<input type=\"hidden\" name =\"subtotal3\" value=\"".$subtotal3. "\">";
	}
	
	 elseif ($couponcode =="1234" || $couponcode =="5678")
	 {	
			$subtotal3 = $subtotal2 *.8;
			echo "<tr><td></td><th colspan=\"2\"> Total with 20% Discount</th><th>$".number_format($subtotal3,2). "</th></tr>";
			echo "<input type=\"hidden\" name =\"couponcode\" value=\"".$couponcode. "\">";
			echo "<input type=\"hidden\" name =\"subtotal3\" value=\"".$subtotal3. "\">";
		}
	else 
		{
			$subtotal3=$subtotal2;
			echo "<tr><td></td><th colspan=\"2\"> Total Bill</th><th>$".number_format($subtotal3,2). "</th></tr>";
			echo "<input type=\"hidden\" name =\"couponcode\" value=\"".$couponcode. "\">";
			echo "<input type=\"hidden\" name =\"subtotal3\" value=\"".$subtotal3. "\">";
		}

	echo   "</table>";
	echo "<p class=\"center\"> Enter payment information below or <a href=\"javascript:history.go(-1)\">Go back</a> and change the order.</p>"; 
	
		echo" <p class=\"CenterBlue\"> Payment Information</p>";
	
		echo "<table class=\"tablename\">";
		echo "<tr><th>First Name</th><th>Last Name</th></tr>";
		
		echo "	<td><p><input type=\"text\" name =\"firstname\" size =\"25\" maxlength = \"30\"required></p></td> <td><p><input type=\"text\" name =\"lastname\" size =\"25\" maxlength = \"30\"required></p></td>";
		echo "		<tr><th>Phone Number</th><th>Email Address</th></tr>";
		echo "		<td>(<input type=\"text\" name =\"phone1\" size =\"3\" maxlength = \"3\"required>)		
				<input type=\"text\" name =\"phone2\" size =\"3\" maxlength = \"3\"required>	
				<input type=\"text\" name =\"phone3\" size =\"4\" maxlength = \"4\"required>
				<td><p><input type=\"email\" name =\"email\" size =\"30\" maxlength = \"40\"required></p></td>";
		echo " <tr><th>Credit Card Type</th><th>Credit Card Number</th><th>Zip Code</th><tr>";	
		
		echo "	<td><select  id=\"CardType\" name = \"CardType\" >
			 <option value = \"AmEx\">American Express</option>
		  <option value = \"Discover\">Discover</option>
			   <option value = \"MasterCard\">Master Card</option>
			   <option value = \"Visa\">Visa</option>
			   </select></td>";
		echo "<td><p><input type=\"text\"  id =\"CardNumber\" name = \"CardNumber\" size =\"24\" maxlength = \"24\" onblur=\"testCreditCard();\"required></p></td>";
		echo "<td><p><input type=\"text\" name =\"zipcode\" size =\"5\" maxlength = \"5\"required></p></td>";
		echo "<tr><td colspan=\"2\" class = \"center\"><input type =\"submit\" value=\"Submit\"></td></tr>";
		echo "</table>";
		echo "</form>";
		
	?>
	
	</div>

</body>

</html>