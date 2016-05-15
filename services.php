<?php
 
echo'<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Services</title>
<style type="text/css">
*{
margin: 0;
padding: 0;
}
 
body{
font-family: Open Sans, Arial, sans-serif;
overflow: hidden;
}
 
nav{
position:fixed;
z-index: 1000;
top: 0;
bottom: 0;
width: 200px;
background-color: #036;
tranform: translate3d(-200px, 0, 0);
transition: transform 0.4s ease;
}
.active-nav{
transform: translate3d(0 ,0, 0);
}
nav ul{
list-style: none;
margin-top: 100px;
}
nav ul li a{
text-decoration: none;
display: block;
text-align: center;
color: #fff;
padding: 10px 0;
}
 
.nav-toggle-btn {
display: block;
position: absolute;
left: 200px;
width: 40px;
height: 40px;
background-color: #666;
}
 
.content{
padding-top: 300px;
height: 2000px;
background-color: #ccf;
text-align: center;
transition: transform 0.4s ease;
}
.active-nav .content{
transform: translate3d(200px, 0, 0);
}
 
</style>
</head>
<body>
 
<nav>
 
<a href="#" class="nav-toggle-btn"></a>
 
<ul>
<li><a href="#">Create Account</a></li>
<li><a href="#">Add Question</a></li>
<li><a href="#">Modify Question</a></li>
<li><a href="#">Add User</a></li>
<li><a href="#">Assign Details</a></li>
 
</ul>
 
 
</nav>
 
<div class="content">
<h1>This is content</h1>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
 
(function()){
 
})();
 
</script>
 
</body>
</html>'
 
?>