<?php
include("menu.php");
echo'<html>
	<title>
		Home
	</title>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	    <script src="home.js"></script>
	</head>
	
	<body>
		
		<table name="tableHome">
			<tr>
				<th  colspan="4"> Select category</th>
			</tr>
			<tr>
				<td>
					<a href="javaSkills.php">
					<h4 align="center" class="textId"> Java </h4>
					</a>
				</td>
				<td>
					<a href="oracleSkills.php">
					<h4 align="center" class="textId"> Oracle </h4>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="cPlusPlusSkills.php">
					<h4 align="center" class="textId"> C++ </h4>
					</a>
				</td>
				<td>
					<a href="cSkills.php">
					<h4 align="center" class="textId" > C </h4>
					</a>
				</td>
			</tr>			
		</table>
	</body>
</html>'
?>