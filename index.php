
<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
</head>
<style>
   /* Begin Navigation Bar Styling */
   #nav {
      width:100%;
      float: left;
      margin: auto;
      padding:0;
	  text-align:center;
      list-style: none;
      background-color:#CCFFCC;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
		  
	  
   #nav li {
      float:left; }
   #nav li a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: bold;
      color: #069;
      border-right: 1px solid #ccc; }
   #nav li a:hover {
      color: #c00;
      background-color: #fff; }
   /* End navigation bar styling. */
   
   /* This is just styling for this specific page. */
  
   #wrap {
      width: 750px;
      margin: 0 auto;
      background-color: #fff; 
	  text-align:center;
	  }
   h1 {
      font-size: 1.5em;
	  font-color:#FFFFFF;
      padding: 1em 8px;
      background-color:#990012;
      margin: 0;
	  background-image:url(blackforest.jpg)}
	  
</style>

<body>
<div id="wrap">

   <h1>Cake Ordering System</h1>
   
   <!-- Here's all it takes to make this navigation bar. -->
   <ul id="nav">
      <li><a href="#">Home</a></li>
	  <li><a href="galleries.php">Cake Products</a></li>
	  <li><a href="prices.php">Price List</a></li>
	  <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="Help.php">Help</a></li>
   </ul>
   <!-- That's it! -->

</body>
<div class="container">
<div class="fieldset">
<fieldset style="width:500px; margin:auto;border-radius:20px;">   
	 
        <?php
          if(!empty($_REQUEST['message'])){
            echo $_REQUEST['message'];
          }

        ?>
    
      <legend>Login </legend>
        <p>&nbsp; </p>
        <p>&nbsp;</p>
        <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "post" >    
        <center>    
        <table>    
            <input type = "hidden" name = "cmd" value = "verificaLogin" />    
            <tr>    
                <td> Username</td>    
                <td><input type = "text" name = "username" /></td>    
            </tr>    
            <tr>    
                <td> Password</td>    
                <td><input type = "password" name = "pass" /></td>    
            </tr>    
            <tr>    
                <td colspan="2">    
                    <div align="center">    
                    <input type = "submit" name = "login" value = "Login" /> 
                    </div> <br/>   
					                </td>    
            </tr> 
            
        </table>    
         </form>  
		 <div align="right">
					<font color="#FF0000">&nbsp; NEW TO OUR WEBSITE?</br>
					&nbsp; <a href='registration.php'>REGISTER HERE</a> </font>		
					
		</div>
         
	 
<?php
require_once('db_connect.php');
$msg="";


if(isset($_POST['login'])){
 $username=$_POST['username'];
 $pass=$_POST['pass'];
 
if($username=="" || $pass==""){


   $msg.="Please fill in all the fields";


}
else{

    $query="select * from member WHERE username='$username'and password='$pass'";
	$result=mysqli_query($connect,$query);
	//$=mysql_fetch_row($query);
	while($row =mysqli_fetch_assoc($result)){  
	     //exit;
    
 $usertype = $row['usertype'];

if($usertype == 'admin'){
    $redirect='admin.php'; // This line triggers a redirect if the user_type is admin
} else if ($usertype =='member') {
    $redirect='user.php'; // This line triggers for other user_types
}

	 header('Location:'.$redirect); 
	
	}
	

	
	
}	
	


}




 echo $msg;

			
?>
 </body>
 </html> 
	    
  
  