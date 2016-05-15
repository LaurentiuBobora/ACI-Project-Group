<?php
require_once('config1.php'); 
/*
echo $sql = "INSERT INTO user (username, role_id)
VALUES ('fdsfd',2)";
			if (!$sql) 
			die("Connection failed: " . mysqli_connect_error());
			
*/
if(isset($_POST['cont']))
{
	$username = $_POST['username']; 
	$password = $_POST['password'] ; 
	$first_name = $_POST['first_name']; 
	$last_name = $_POST['last_name'];
	$mail = $_POST['mail'];
	$role_id = $_POST['role_id'];
	$cv = $_POST['cv'];

	if((strlen($username) >= 4) && (strlen($password) >= 8) && (strlen($first_name) > 2) && (strlen($last_name) > 2) && (strlen($mail) >= 5))
	{
		$username = mysql_query("SELECT * FROM metinpla_aci.user WHERE login='$username'");
		$email = mysql_query("SELECT * FROM metinpla_aci.user WHERE email='$mail'");
		
		if((mysql_num_rows($username) == 1) || (mysql_num_rows($mail) == 1))
		{
			echo error("Username or email already in use, try another.");
		}
						
		else
		{	
			echo $selectSQL = mysql_query("INSERT INTO `user` (`username`, `password`, `first_name`, `last_name`, `mail`, `role_id`, `cv`) 
			VALUES ('$username', '$password', '$first_name', '$last_name', '$mail', '$role_id', '$cv')") or die(mysql_error());
			if (!$selectSQL) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
}
}
	

echo'<html>

	<title>
		 Create Account
	</title>

	<head>
		<link rel="icon" type="image/png" href="images/logo4.png"/>
		
		<link rel="stylesheet" type="text/css" href="cont.css">

		<link rel="stylesheet" type="text/css" href="barMenu.css">

		<meta charset="utf-8">

		<meta content="noindex, nofollow" name="robots">

	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" href="styles.css">

	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

	    <script src="home.js"></script>

	</head>

	<body>

	<div id="cssmenu">

			<ul>

				<li> <img src ="images/logo.jpg" width="120px" height="59px"></img></li>

			    <li><a href="home.php"><span>Home</span></a></li>

				<li class="active"><a href="cont.php"><span>Create account</span></a></li>

				<li><a href="#"><span>Services</span></a></li>

				<li class="last"><a href="#"><span>Log out</span></a></li>

			</ul>

	</div>

		<div class="sign-in">

		  <div class="sign-in-triangle"></div>

		  <h2 class="sign-in-header">Create Account</h2>

		  <form class="sign-in-container" action="" method="POST">
			
			<p><input type="text" name="username" placeholder="Username *" pattern="\w{4,}" title="Minimum 4 characters." required></p>
			
			<p><input type="text" name="first_name" placeholder="First Name *" required></p>

			<p><input type="text" name="last_name" placeholder="Last Name *" required></p>

			<p><input type="email" name="mail" placeholder="Email *" required></p>

			<p><input type="password" name="password" id="password" placeholder="Password *" title="Minimum 8 characters, one number, one uppercase and one lowercase letter." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" required></p>

			<p><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password *" input="" onInput="check(this)" required></p>

			<p>

				<select id="role_id" name="role_id" value="role_id" onChange="jsFunction()"> 

					<option type="text" selected disabled>Select Role *</option>
					
					<option type="text" name="1" id="1" value="1">Administrator</option>

					<option type="text" name="2" id="2" value="2">Manager</option>
					
					<option type="text" name="3" id="3" value="3">Candidate</option>

				</select>

			</p>
			
			<p><input name="cv" id="file" type="file" value="cv" onChange="jsFunction()"></p>
			
			<p><input type="submit" value="Create Account"></p>

		  </form>

		</div>

	</body>

</html>';

?>