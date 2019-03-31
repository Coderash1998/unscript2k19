<?php
    $uname = $_GET['username'];                                 //second approach
	$roll = $_GET['rollnumber'];
	$sname = $_GET['studentname'];                                 //second approach
	$fname = $_GET['fathername'];
	$mname = $_GET['mothername'];                                 //second approach
	$mobile = $_GET['mobilenumber'];
	$pass = $_GET['pass'];                                 //second approach

	//echo $uname.$roll.$sname.$fname.$mname.$mobile.$pass;
	$servername="localhost";
	$username="root";
	$password="";
	$db = "college";
	$conn =mysqli_connect($servername,$username,$password,$db);
	if($conn)
	{
		
		echo "Connected";
	}
	else
	{	
		echo "Error in DB".$conn.error();
	}
	$res=openssl_pkey_new();
	openssl_pkey_export($res, $privatekey);
	$publickey=openssl_pkey_get_details($res)
	$publickey=$publickey["key"];
	/*
	$sql = "CREATE OR REPLACE DATABASE College";
	if($conn->query($sql)=== TRUE){
			echo " DB created successfully";
	}
	else {
    	echo "Error creating database: " . $conn->error;
	}


	$sql ="CREATE OR REPLACE TABLE Register(username varchar(30),roll_number varchar(10),student_name varchar(20),father_name varchar(20), mother_name varchar(20), mobile int, password varchar(16)";
	if($conn->query($sql)=== TRUE){
			echo "TABLE created successfully";
	}
	else {
    	echo "Error creating TABLE: " . $conn->error;
	}

*/
	$sql ="insert into Register
			values('$uname','$roll','$sname','$fname','$mname','$mobile','$pass')";



	if(mysqli_query($conn,$sql)){
		
		echo "inserted successful";
	}
	else
		echo "Error in connection db".mysqli_error($conn);
	mysqli_close($conn);

	echo"<script>alert('Registered successfully');
	window.location.href='index.html';
	</script>";
?>	