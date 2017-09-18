
<?php
require_once('db_connect.php');
if(isset($_POST['post']))	
{
$fullname = $_POST['fname'];
$email=$_POST['email'];
$msg = $_POST['msg'];



mysqli_query($connect,"INSERT INTO comments(fullname,email,message)VALUES('$fullname','$email','$msg')");
	   
echo "<br/><br/><span>Feedback successfully!</span>";

}
else{
echo "<p>Feedback Failed <br/> Some Fields are Blank....!!</p>";
}

?>




   