<?php

$user = 'root';
$pass = '';
$db = 'maindb';
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$connection = new mysqli('localhost', $user, $pass, $db) or die("Connection Error");

if (isset($_POST['pass'])) {

if (empty($_POST['uid']) || empty($_POST['pass'])) {
echo "Please enter Username and Password";
}
else {

// Define $username and $password
$userid=$_POST['uid'];
$password=$_POST['pass'];

// To protect MySQL injection for Security purpose
$userid = stripslashes($voterid);
$password = stripslashes($password);

// SQL query to fetch information of registerd users and finds user match.
    $sql = "SELECT pass FROM  `parents` WHERE  uid='$userid'";
    $query=mysqli_query($connection,$sql);
    $rows = mysqli_num_rows($query);
if ($rows == 1) {
 // Initializing Session
$_SESSION['uid']=$voterid;

  $flag=1;
  echo "<script>alert('Login Successfull');
 window.location.href='bantai';
 </script>";

} else {
 echo "<script>alert('Username and password are incorrect');
 window.location.href='bantai';
 </script>";

exit();
}

mysqli_close($connection); // Closing Connection
}
}

?>
