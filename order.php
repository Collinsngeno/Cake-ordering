

<link rel="stylesheet" type="text/css" href="css.css"/>
<body>
  
<div class="container">

<form name="Orderform"action="orderscript.php" method="post">
	<table width='700' height='700' border='2' align='center' cellpadding="20px"> 
	<tr>	
		<td align='center' colspan='5';><h1>Order Form</h1></td>
	</tr>
	<tr>	
		<td align='center'>Cakename</td>
		<td align='left'><select name="cakename">
  <option value="not selected">not selected</option>
  <option value="Blackforest ">Blackforest</option>
  <option value="Redvelvet">Redvelvet</option>
  <option value="Whiteforest">Whiteforest</option>
  <option value="Blueberry">Blueberry</option>
  <option value="Bananacake">Bananacake</option>
  <option value="Chocolate fudge">Chocolatefudge</option>
  <option value="Fruitcake">Fruitcake</option>
  <option value="Coffeecake">Coffeecake</option>
  </select>
<?php
  if 
    (isset($Get['select_ box'])
      !=='0')
  {
    echo'Please select a cake';
  }
?>

	<tr>	
		<td align='center'>Quantity</td>
		<td align='left'><select name="quantity">
 <option value="not selected">not selected</option>
  <option value="Blackforest 1/2kg ">Blackforest1/2kg</option>
  <option value="Blackforest 1kg ">Blackforest1kg</option>
  <option value="Blackforest 2kg ">Blackforest2kg</option>
  <option value="Blackforest 3kg ">Blackforest3kg</option>
  <option value="Blackforest 4kg">Blackforest4kg</option>
  <option value="Redvelevet 1/2kg ">Redvelvet1/2kg</option>
  <option value="Redvelvet 1kg">Redvelvet 1kg</option>
  <option value="Redvelvet 2kg">Redvelvet2kg</option>
  <option value="Redvelvet 3kg">Redvelvet3kg</option>
  <option value="Redvelvet 4kg">Redvelvet4kg</option>
  <option value="Whiteforest 1/2kg">Whiteforest1/2kg</option>
  <option value="Whiteforest 1kg">Whiteforest 1kg</option>
  <option value="Whiteforest 2kg">Whiteforest2kg</option>
  <option value="Whiteforest 3kg">Whiteforest3kg</option>
  <option value="Whiteforest 4kg">Whiteforest4kg</option>
  <option value="Blueberry 1/2kg">Blueberry1/2kg</option>
  <option value="Blueberry 1kg">Blueberry 1kg</option>
  <option value="Blueberry 2kg">Blueberry 2kg</option>
  <option value="Blueberry 3kg">Blueberry3kg</option>
  <option value="Blueberry 4kg">Blueberry4kg4600</option>
  <option value="Banana cake 1/2kg">Bananacake1/2kg1200</option>
  <option value="Banana cake 1kg">Bananacake1kg</option>
  <option value="Banana cake 2kg">Bananacake2kg</option>
  <option value="Banana cake 3kg">Bananacake3kg</option>
  <option value="Banana cake 4kg">Bananacake4kg</option>
  <option value="Chocolate fudge 1/2kg">Chocolatefudge1/2kg</option>
  <option value="Chocolate fudge 1kg">Chocolatefudge1kg</option>
  <option value="Chocolate fudge 2kg">Chocolatefudge2kg</option>
  <option value="Chocolate fudge 3kg">Chocolatefudge3kg</option>
  <option value="Chocolate fudge 4kg">Chocolatefudge4kg</option>
  <option value="Fruit cake 1/2kg">Fruitcake1/2kg</option>
  <option value="Fruit cake 1kg">Fruitcake1kg</option>
  <option value="Fruit cake 2kg">Fruitcake2kg</option>
  <option value="Fruit cake 3kg">Fruitcake3kg</option>
  <option value="Fruit cake 4kg">Fruitcake4kg</option>
  <option value="Coffee cake 1/2kg">Coffeecake1/2kg</option>
  <option value="Coffee cake 1kg">Coffeecake1kg</option>
  <option value="Coffee cake 2kg">Coffeecake2kg</option>
  <option value="Coffee cake 3kg">Coffeecake3kg</option>
  <option value="Coffee cake 4kg">Coffeecake4kg</option>
</select>

<?php
  if 
    (isset($Get['select_ box'])
      !=='0')
  {
    echo'Please select a quantity';
  }
?>

<tr>  
    <td align='center'>Price</td>
    <td align='left'><select name="price" onchange="price()">
 <option value="not selected">not selected</option>
  <option value="Blackforest 1/2kg =1000">Blackforest1/2kg=1000</option>
  <option value="Blackforest 1kg =1700">Blackforest1kg=1700</option>
  <option value="Blackforest 2kg =1200">Blackforest2kg=2000</option>
  <option value="Blackforest 3kg =3000">Blackforest3kg=3000</option>
  <option value="Blackforest 4kg =3500">Blackforest4kg=3500</option>
  <option value="Redvelevet 1/2kg =1200">Redvelvet1/2kg=1200</option>
  <option value="Redvelvet 1kg =1800">Redvelvet 1kg=1800</option>
  <option value="Redvelvet 2kg =2800">Redvelvet2kg=2800</option>
  <option value="Redvelvet 3kg =3900">Redvelvet3kg=3900</option>
  <option value="Redvelvet 4kg =4200">Redvelvet4kg=4200</option>
  <option value="Whiteforest 1/2kg=1200">Whiteforest1/2kg=1200</option>
  <option value="Whiteforest 1kg =1800">Whiteforest 1kg=1800</option>
  <option value="Whiteforest 2kg =2800">Whiteforest2kg=2800</option>
  <option value="Whiteforest 3kg =3200">Whiteforest3kg=3200</option>
  <option value="Whiteforest 4kg =3700">Whiteforest4kg=3700</option>
  <option value="Blueberry 1/2kg =1400">Blueberry1/2kg=1400</option>
  <option value="Blueberry 1kg =2100">Blueberry 1kg=2100</option>
  <option value="Blueberry 2kg =3000">Blueberry 2kg=2800</option>
  <option value="Blueberry 3kg =4000">Blueberry3kg=3200</option>
  <option value="Blueberry 4kg =4600">Blueberry4kg=4600</option>
  <option value="Banana cake 1/2kg =1200">Bananacake1/2kg=1200</option>
  <option value="Banana cake 1kg =2000">Bananacake1kg=2000</option>
  <option value="Banana cake 2kg =2800">Bananacake2kg=2800</option>
  <option value="Banana cake 3kg =3800">Bananacake3kg=3800</option>
  <option value="Banana cake 4kg =4200">Bananacake4kg=4200</option>
  <option value="Chocolate fudge 1/2kg =1200">Chocolatefudge1/2kg=1200</option>
  <option value="Chocolate fudge 1kg =2000">Chocolatefudge1kg=2000</option>
  <option value="Chocolate fudge 2kg =2800">Chocolatefudge2kg=2800</option>
  <option value="Chocolate fudge 3kg =3900">Chocolatefudge3kg=3900</option>
  <option value="Chocolate fudge 4kg =4200">Chocolatefudge4kg=4200</option>
  <option value="Fruit cake 1/2kg =1200">Fruitcake1/2kg=1200</option>
  <option value="Fruit cake 1kg =2000">Fruitcake1kg=2000</option>
  <option value="Fruit cake 2kg =3000">Fruitcake2kg=3000</option>
  <option value="Fruit cake 3kg =4000">Fruitcake3kg=4000</option>
  <option value="Fruit cake 4kg =4500">Fruitcake4kg=4500</option>
  <option value="Coffee cake 1/2kg =1200">Coffeecake1/2kg=1200</option>
  <option value="Coffee cake 1kg =2000">Coffeecake1kg=2000</option>
  <option value="Coffee cake 2kg =3000">Coffeecake2kg=3000</option>
  <option value="Coffee cake 3kg =3900">Coffeecake3kg=3900</option>
  <option value="Coffee cake 4kg =4500">Coffeecake4kg=4500</option>
</select>
<?php
  if 
    (isset($Get['select_ box'])
      !=='0')
  {
    echo'Please select price based on chosen cake and quantity';
  }
?>

	<tr>	
		<td align='center'>Phone number</td>
		<td><input type='text' name='phonenumber' pattern="(+254725265595") required="required" ></td>
    <td align='right'>*Phone number should be in this format i.e +254725265595*</td>
	</tr>
	<tr>	
		<td align='center'>Address</td>
		<td><input type='text' name='address' placeholder="P.o box 56 langata"  required="required"></td>
	</tr>
    <tr>	
		<td align='center'>Fullname</td>
		<td><input type='text' name='fullname'placeholder= "John kamau" required="required"/></td>
  <tr>
  <tr> 
      <td align='center'>Total</td>
    <td><input type='text' name='Total'/></td>
  <tr>

		<td colspan='5' align='center'><input type='submit' name='submit' value='Order now' /><input type="reset" class="btn btn-large btn-danger"value="Cancel"/>/</td>
	</tr>
	<a href='user.php'>Click here to go back to home<br/><br/>
	</table>
</form>
<script>
function price(){
 var total=0;
 total +=$ ('input[name=item1"]:selected').val();
  total +=$ ('input[name=item2"]:selected').val();
       $('#total').val(total);

  }     
 