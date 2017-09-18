<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contact Us</title>
</head>
<div class="container">
<body>
<ul>
<br>
 <li>Telephone no:+254725265595</li>
 <li>Email:tigercollins29@gmail.com</li>
 <ul>
 <br/>
 
<form method="post" action="contact.php">
<input type="hidden" name="ids" value="1" />

 <font color="#CC0000" size="3">Send Us A Message<br></font>
	You can send us here your feedbacks
<table align="left">
<td width="281"><div align="left">Your Full Name:<br /> <input type="text" name="fname" pattern="^[a-zA-Z ]*$",$fname class="span5" value=""></div></td>
<font face="century gothic" size="3">
  <br />
  <tr><td></td></tr>
  <tr><td> Email Address </td></tr>     	  
  <tr><td><input type="email" name="email" value=""  class="span5" required="required"/></td></tr>
  <br />
  <tr><td></td></tr>
 <tr><td> Your Message</td></tr>
  	<tr><td><textarea name="msg"  size="50"  class="span6 uneditable-textarea" required="required" placeholder="Type your message here text only"></textarea></td></tr>
  </p>
  <p>
    <tr><td><button type="submit" class="btn btn-primary " value="Send" name="post">Submit</button><button type="reset" class="btn btn-danger " value="Send">Cancel</button></td></tr>
  </p>
    </form> 
	
</table>


></body>
</html>
