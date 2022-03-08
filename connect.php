<?php 
include("db.php");
if (isset($_POST['sign_up'])) {
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	if ($password == $cpassword) {
		$query = $con->prepare("INSERT INTO users(fname,sname,lname,phone,email,password) VALUES ('$fname','$sname','$lname','$phone','$email','$password')");
		$query->execute();
		header('location:index.php?signup=success');
	}
	else{
		header('location:index.php?signup=error');
	}
	
}
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	echo $email;

	$query = $con->prepare("SELECT id,fname,sname,lname,email,active,color FROM users WHERE email = '$email' AND password = '$password'");
	$query->execute();
	if ($query) {
		$row = $query->fetch();
		session_start();
		$_SESSION['account'] = $row;
		//print_r($row);
		header('location:index.php?login=success');
	}
	else{
		echo "error";
		header('location:index.php?login=error');
	}
	
}
if (isset($_POST['sub'])) {
	$id = $_POST['id'];
	$sub = $_POST['subc'];
	//echo $sub;
	$color = $_POST['color'];
	$query = $con->prepare("UPDATE users SET active = '$sub', color = '$color' WHERE id = '$id'");
	$query->execute();
	header('location:index.php?sub=success');
}
if (isset($_POST['contact_'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$query = $con->prepare("INSERT INTO contacts_us(name, email,message) VALUES('$name','$email','$message')");
	$query->execute();
	header('location:index.php?sub=success');

}
?>