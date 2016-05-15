<?php

$username = $_POST['username'];
$password = $_POST['password'];

require("config.php");

$sql = mysqli_query($con, "SELECT username FROM user WHERE username = '".$username."' AND password = '".$password."'") or die ("Query error!");

$count = mysqli_num_rows($sql);
 if($count != 0)
 {
	 header("location:home.php");
 } else {
	 header("location:index.php");
 }


?>