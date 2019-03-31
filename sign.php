<?php
    $uname = $_GET['username'];                                 //second approach
	$pass = $_GET['pass'];                                 //second approach
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

?>






<?php
$username = $_GET['fname'];
$password = $_GET['fpass'];
$con=mysqli_connect("mysql","database_user","database_password","mydatabase");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT password FROM register where username='".$uname."' ";
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
  {
  echo $row['password'];
  }
mysqli_close($con);
?>