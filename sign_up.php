

<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];



// Create connection
$conn = new mysqli('localhost','root','','sign_up');  
if($conn->connect_error){  
  die('Connection Failed: '.$conn->connect_error);  
}else
{ 
	$stmt = $conn->prepare("INSERT INTO signup(username, email,password,repassword) VALUES (?,?,?,?)");
		$stmt->bind_param("ssss",$username,$email,$password, $repassword);
		$stmt->execute();
		echo "Successfully Sign up";
		$stmt->close();
		$conn->close();
}

?>
