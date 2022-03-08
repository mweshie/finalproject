<?php
date_default_timezone_set('Africa/Nairobi');
$servername = "localhost";
try{
	try{
		$con = new PDO("mysql:host=$servername;dbname=gym","root", "");
  		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  	catch(PDOException $e){
  		echo $e;
  	}
} 
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>