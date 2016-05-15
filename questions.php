<?php
include("menu.php");
echo'<html>
	<title>
		Questions
	</title>
	<head>
		<link rel="stylesheet" type="text/css" href="questions.css">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	    <script src="home.js"></script>
	</head>
	
	<body>
		<div class="boxed">       
			<h3>Ce este java virtual machine(JVM)?</h3>
			<form class="forms">
				<textarea rows="6" cols="110" placeholder="Your answer here"></textarea>
				<input type="submit" class="submit" value="Submit Answer">
			</form>
		</div>
		
		<div class="boxed">       
			<h3>Cum se definste un buton in Java Swing?</h3>
			<form class="forms">
				<input type="checkbox" name="raspuns1" value="Bike"><span class="choose">JButton</span></input><br>
				<input type="checkbox" name="raspuns2" value="Car"><span class="choose">JTrotineta</span></input><br>
				<input type="checkbox" name="raspuns3" value="Car"><span class="choose">Button</span></input><br>
				<input type="checkbox" name="raspuns4" value="Car"><span class="choose">new Button()</span></input><br>
				<input type="checkbox" name="raspuns5" value="Car"><span class="choose">InputButton</span></input><br>
				<input type="checkbox" name="raspuns6" value="Car"><span class="choose">FFFFFFFFFF</span></input><br>
				<input type="submit" class="submit" value="Submit Answer">
			</form>
		</div>
		
		<div class="boxed">       
			<h3>Poate rula java pe mai multe platforme?</h3>
			<form class="forms">
				<input type="radio" name="raspuns1" value="Bike"><span class="choose">Adevarat</span></input><br>
				<input type="radio" name="raspuns1" value="Bike"><span class="choose">Fals</span></input><br>
				<input type="submit" class="submit" value="Submit Answer">
			</form>
		</div>
	
		
	</body>
</html>'
?>