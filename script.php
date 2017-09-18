
<?php
require_once('db_connect.php');
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

//validate input 

$message = validateallFields();
if($message['valid'] == FALSE){
	$msg = $message['message'];


    header('Location:registration.php?message='.$msg);
	exit;
}


if($username !=''||$password !=''){
//Insert Query of SQL
$result = mysqli_query($connect,"INSERT INTO member(fname, lname, address, contact, username, password,usertype)VALUES('$fname', '$lname','$address', '$contact',  '$username', '$password','$usertype')");
if ($result) {

    header('Location:index.php?message=Registration Successful, please login');
echo "<br/><br/><span>Registration successfully!</span>";

	
}else{
echo "<p>Username already exists";
	
}
}

else{

echo "<p>Username or password is Blank....!!</p>";
}

} 

mysqli_close($connect); // Closing Connection with Server

function validateallFields(){
	$response = array();
	$valid = FALSE;
	//validate first name
	//first name should not be numeric
	if(is_numeric($_POST['fname'])){
		$response['message'] = "First name should not be a number";
		$response['valid'] = false;
		return $response;
	}elseif(is_numeric($_POST['lname'])){
		$response['message'] = "Last name should not be a number";
		$response['valid'] = FALSE;
		return $response;
	}elseif(is_numeric($_POST['username'])){
		$response['message'] = "Your username should not be numeric";
		$response['valid'] = FALSE;
		return $response;
	}elseif(is_numeric($_POST['address'])){
		$response['message'] = "address should be alphanumeric";
		$response['valid'] = FALSE;
		return $response;
	}elseif(!is_numeric($_POST['contact'])){
		$response['message'] = "Your contact should be numeric";
		$response['valid'] = FALSE;
		return $response;
	
	}else{
		$response['valid'] = TRUE;
		return $response;
	}

}


?>
