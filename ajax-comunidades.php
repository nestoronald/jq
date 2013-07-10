<?php 
$con = mysql_connect("localhost", "root", "mysql");
mysql_select_db("comunidades") or die("Cannot connect");

$query = "select * from comunidades";
$sql = mysql_query($query);




 ?>


<html>
<head>
	<title>Ajax con jquery</title>
</head>
<body>

<form id="comunidade">
	<legend>

	</legend>



</form>


</body>
</html>