<?php
 // Starting Session
session_start();
$error=''; // Variable To Store Error Message
$connection = mysqli_connect('localhost', 'root', '', 'newmaindb');


if (isset($_POST['username'])) {

if (empty($_POST['username']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['pass'];

$username = stripslashes($username);
$password = stripslashes($password);

// SQL query to fetch information of registerd users and finds user match.
    $sql = "SELECT PASSWORD FROM  `parent` WHERE username='$username'";
    $query = mysqli_query($connection,$sql);
    $rows = mysqli_num_rows($query);

    // Set session variables

if ($rows == 1) {

$_SESSION['username']=$username;

$flag = 1;
 // Initializing Session
    echo "<script>alert('LOGIN SUCCESSFULLY');
   window.location.href='voter1.php';</script>";
}
else {
    echo "<script>alert(' LOGIN failed.');
   window.location.href='index.html';</script>";

}
mysqli_close($connection); // Closing Connection
}
}
?>
