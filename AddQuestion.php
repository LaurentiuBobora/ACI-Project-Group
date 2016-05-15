<?php echo '<html>
<head>
	<link rel="stylesheet" href="Services.css">
	<link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
	$(document).ready(function(){

    $("#Addrow").click(function(){
        var rowName = "ceva"; //Here the name you wont for input
        $("#possible").append(\'<tr><td><input type="text" name="\' + rowName + \'[]"/></td></tr>\');
		});
    
	});	
	</script>
	<script>
	$(document).ready(function(){

    $("#Addrow2").click(function(){
        var rowName = "ceva"; //Here the name you wont for input
        $("#right").append(\'<tr><td><input type="text" name="\' + rowName + \'[]"/></td></tr>\');
		});
    
	});	
	</script>
</head>
<body>

<h3>Add Question: </h3>
<form>
<h3>Question Text </h3>
<textarea name="question text"></textarea><br>
<h3>Select Category</h3>
 <select>
  <option value="java">Java</option>
  <option value="c++">C++</option>
  <option value="c">C</option>
  <option value="swift">Swift</option>
   <option value="other">Other</option>
</select> 
<h3>Skill level selection</h3>
 <select>
  <option value="beginner">Beginner</option>
  <option value="medium">Medium</option>
  <option value="great">Great</option>
  <option value="master">Master</option>
</select>
<h3>Question type</h3> 
<select>
  <option value="radio">O singura varianta de raspuns</option>
  <option value="checkbox">Variante multiple de raspuns</option>
  <option value="text">Text</option>
</select>

<h3>Possible answers</h3>

<table id="possible">
	<tr>
	<td><input type="text" name="possible1" value=""/></td>
	</tr><tr>
      
</table>
<a href="#" id="Addrow">Add Row</a>

</br></br>	
<input type="submit" value="Submit">
</br></br></br>
</body>
</html>
'?>