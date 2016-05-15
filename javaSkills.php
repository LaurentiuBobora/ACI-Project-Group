<?php
echo'
<html>
	<title> Java Skills </title>
	
	<head>
		<head>
		<link rel="icon" type="image/png" href="images/logo4.png"/>
		<link rel="stylesheet" type="text/css" href="skills.css">
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
				<li><img src ="images/logo.png" width="170px" height="39px"></img></li>
			    <li class="active"><a href="home.php"><span>Home</span></a></li>
				<li><a href="cont.php"><span>Create account</span></a></li>
				<li><a href="#"><span>Services</span></a></li>
				<li class="last"><a href = "logOut.php"><span>Log out</span></a></li>
			</ul>
		</div>
		
		<table name="tabelSkills">
			<th colspan="2"> 
				Select skills and level for Java technology
			</th>
			
			<tr>
				<td align="center" class="textId"> Swing </td>
				<td align="center" class="textId">
				<div class="styled-select">
					<select id="swingSkill">
						<option id="lv0" value="0">Level 0</option>
						<option id="lv1" value="1">Level 1</option>
						<option id="lv2" value="2">Level 2</option>
						<option id="lv3" value="3">Level 3</option>
						<option id="lv4" value="4">Level 4</option>
						<option id="lv5" value="5">Level 5</option>
					</select>
				</div>
				</td>
			</tr>
			
			<tr>
				<td align="center" class="textId"> Basis </td>
				<td align="center" class="textId">
				<div class="styled-select">
					<select id="basisSkill">
						<option id="lv0" value="0">Level 0</option>
						<option id="lv1" value="1">Level 1</option>
						<option id="lv2" value="2">Level 2</option>
						<option id="lv3" value="3">Level 3</option>
						<option id="lv4" value="4">Level 4</option>
						<option id="lv5" value="5">Level 5</option>
					</select>
				</div>
				</td>
			</tr>
			
			<tr>
				<td align="center" class="textId"> Selenium </td>
				<td align="center" class="textId">
				<div class="styled-select">
					<select id="seleniumSkill">
						<option id="lv0" value="0">Level 0</option>
						<option id="lv1" value="1">Level 1</option>
						<option id="lv2" value="2">Level 2</option>
						<option id="lv3" value="3">Level 3</option>
						<option id="lv4" value="4">Level 4</option>
						<option id="lv5" value="5">Level 5</option>
					</select>
				</div>
				</td>
			</tr>
			
		</table>
	</body>
</html>';

?>