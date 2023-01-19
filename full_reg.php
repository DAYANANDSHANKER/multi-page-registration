

<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$location = $_POST['location'];
$message = $_POST['message'];

// Create connection
$conn = new mysqli('localhost','root','','full_reg');  
if($conn->connect_error){  
  die('Connection Failed: '.$conn->connect_error);  
}else
{ 
	$stmt = $conn->prepare("INSERT INTO full_reg(first_name, last_name, email, password, confirm_password, location, message) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("sssisss",$first_name, $last_name, $email, $password, $confirm_password, $location, $message);
		$stmt->execute();
		echo "Successfully <br> <p> successfully <br> Regards,<br> Teams DEV </p>";
		$stmt->close();
		$conn->close();
}

?>
