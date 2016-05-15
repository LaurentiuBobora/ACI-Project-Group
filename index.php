<?php
echo'
<html>
	<title>
		 Login
	</title>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="icon" type="image/png" href="images/logo4.png"/>
	</head>
	<body>
	<img src ="images/logo.png" width="170px" height="39px" align="center"></img>
		<div class="login">
		  <div class="login-triangle"></div>
		  
		  <h2 class="login-header"></h2>

		  <form class="login-container" name="login" action="verify.php" method="post">
			<p><input type="text" name="username" placeholder="username *" required></p>
			<p><input type="password" name="password" placeholder="**********" required></p>
			<h5><input type="submit" name="submit" value="Log in"></h5>
		  </form>
		</div>
	</body>
</html>';
?>