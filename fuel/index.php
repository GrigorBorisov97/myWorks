<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Разход</title>
<style>
body{
	background-image:url(2.jpg);
	background-size:cover;
	color:white;
	text-align:center;
}

div{
	width:20%;
	position:relative;
	left:40%;
	margin-bottom:20px;
}

input[type=text]{
	width:100%;
	height:20px;
	font-size:20px;
	font-weight:bolder;
	background-color:black;
	color:white;
	text-align:center;
}

select{
	background-color:black;
	color:white;
	font-size:20px;
	padding:3px;
	width:50%;
}

input[type=submit]{
	background-color:black;
	color:white;
	padding:5px;
	font-size:16px;
	margin-top:10px;
}

h2{
	font-size:28px;
}

h3{
	font-size:25px;
}

table, th, td {
	border:2px solid white;
	border-collapse:collapse;
	padding:10px;
	font-size:18px;
	
	
}

table{
	width:70%;
	position:relative;
	left:15%;
}

h2,h3,table{
	text-shadow:2px 2px 1px black;

}

</style>
</head>
<body>
<div>
<h2>Въвеждане на разход</h2>
<form method="POST" action="calc.php">
	<h3>Заредени литри</h3>
<input type="text" name="litri" autofocus>
	<h3>Изминати километри</h3>
<input type="text" name="km">
	<h3>Гориво</h3>
<select name="gorivo">
	<option name="Газ" value="1.05">Газ</option>
	<option name="Бензин" value="2.44">Бензин</option>
	<option name= "Дизел" value="2.42">Дизел</option>
</select></br>
<input type="submit" value="Пресметни">
</form>
</div>
<table>
	<tr>
		<th>ID</th>
		<th>Дата</th>
		<th>Литри</th>
		<th>Километри</th>
		<th>Разход на 100км</th>
		<th>Цена на 100км</th>
		<th>Гориво</th>
		<th>Цена</th>
	</tr>

<?php
	$i = 1;
	$done=file("fuel.txt");
	rsort($done);

	foreach ($done as $value){
	$column= explode('!', $value);
	asort($column);
	
	echo "
	
		<tr>
			<td>".$i++."</td>
			<td>".$column[0]."</td>
			<td>".$column[1]."</td>
			<td>".$column[2]."</td>
			<td>".round($column[3],2)."</td>
			<td>".round($column[4],2)."</td>
			<td>".$column[5]."</td>
			<td>".$column[6]."</td>
		</tr>;
		";

	} ?>

</table>
?>
<script>
	document.	



</script>



</body>