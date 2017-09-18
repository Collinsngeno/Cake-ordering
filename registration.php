
<link rel="stylesheet" type="text/css" href="css.css"/>
<body>
  
<div class="container">

<form method='post' action="script.php">
	<table width='700' height='700' border='5' align='center' cellpadding="20px"> 
	<tr>	
		<td align='center' colspan='5';><h1>Registration Form</h1></td>
	</tr>
	<?php
          if(!empty($_REQUEST['message'])){ ?>
	<tr>	
		<td align='center' colspan='5';><h3 style="color:red">*<?php echo $_REQUEST['message'] ?>*</h3/td>
	</tr>
<?php	  }

        ?>

     <tr> 
     <td align='center'>Usertype:</td>
	 <td><input type='radio' name='usertype' value="member" checked>Member</td>
	</tr>  
	<tr>

		<td align='center'>Firstname:</td>
		<td><input type='text' name='fname' /></td>
	</tr>
	
	<tr>	
		<td align='center'>Lastname:</td>
		<td><input type='text' name='lname'/></td>
	</tr>
	
	<tr>	
		<td align='center'>Address:</td>
		<td><input type='text' name='address' placeholder="p.o box 43434..."/></td>
	</tr>
	
	<tr>	
		<td align='center'>Contact:</td>
		<td><input type='text' name='contact' /></td>
	</tr>
	
	<tr>	
		<td align='center'>Username:</td>
		<td><input type='text' name='username'placeholder="John"/></td>
	</tr>
	<tr>		
		<td align='center'>Password</td>
		<td><input type='text' name='password'/></td>
	</tr>
	</tr>
	
	<tr>	
		<td colspan='5' align='center'><input type='submit' name='submit' value='Sign Up'/> <input type="reset" class="btn btn-large btn-danger"value="Cancel"/>/</td>
	</tr>
    <a href='index.php'>Click here to go back to login<br/><br/>

	</table>
</form>


