
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perimeter of rectangle</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		table, tr, th, td{
			border: 5px thick groove;
			border-collapse: collapse;
		}
		.plb{
			background-color: blueviolet;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h1{
			text-align:center;
             pading:0px;
             padding-top: 50px;
             padding-bottom: 50px;
             margin:0px;
             font-family: monospace;
             font-size: 2em;
             font-weight: 1;
             text-transform:uppercase;
		}
		.plb input{
			font-size: 18px;
		}
		.al{
			background-color: red;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h1{
			text-align: center;
			padding: 0px;
			padding-top: 50px;
			padding-bottom: 50px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.al input{
			font-size: 18px;
		}
		.clbh{
			background-color: greenyellow;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h1{
			text-align: center;
			padding: 0px;
			padding-top: 50px;
			padding-bottom: 50px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.clbh input{
			font-size: 18px;
		}
		.abha{
			background-color: lightcoral;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h1{
			text-align: center;
			padding: 0px;
			padding-top: 50px;
			padding-bottom: 50px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.abha input{
			font-size: 18px;
		}
		table{
			margin: 0 auto;
		}
		nav a{
			text-decoration: none;
			font-size: 2em;
			background-color: #16b5d9;
			color: black;
			margin-right: 20px;
			padding: 10px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		nav{
			padding-top: 20px;
			padding-bottom: 20px;
			background-color: lightgreen;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
		}
		body{
			padding-top: 70px;
			padding-bottom: 150px;
		}
	</style>
</head>
<body>
	<nav>
		<a href="#plb">Perimeter</a>
		<a href="#al">Area</a>
		<a href="#clbh">CSA</a>
		<a href="#abha">Trapezoid</a>
	</nav>
	<div class="plb" id="plb">
		<h1>Perimeter</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>length</label></th><th align="center"><label>breadth</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="length"></td><td align="center"><input type="text" name="breadth"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submitplb" value="Calculate Perimeter"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitplb"])) {
		 	$length = $_POST["length"];
		 	$breadth = $_POST["breadth"];

		 	$perimeter = 2 * ($length * $breadth);
		 	echo '<input type="number" value="'.$perimeter.'">';
		 } 
		?>
	</div>
	<div class="al" id="al">
		<h1>Area</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center">length</th><th align="center">length</th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="length"></td><td align="center"><input type="text" name="length"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submital" value="Calculate Area"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submital"])) {
		 	$length = $_POST["length"];

		 	$area = $length * $length;
		 	echo '<input type="number" value="'.$area.'">';
		 } 
		?>
	</div>
	<div class="clbh" id="clbh">
		<h1>CSA</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>length</label></th><th align="center"><label>breadth</label></th><th align="center"><label>height</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="length"></td><td align="center"><input type="text" name="breadth"></td><td align="center"><input type="text" name="height"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submitclbh" value="Calculate CSA"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitclbh"])) {
		 	$length = $_POST["length"];
		 	$breadth = $_POST["breadth"];
		 	$height = $_POST["height"];

		 	$CSA =  2 * (($length * $breadth) + ($breadth * $height) + ($length * $height));
		 	echo '<input type="number" value="'.$CSA.'">';
		 }  
		?>
	</div>
	<div class="abha" id="abha">
		<h1>Area of Trapezoid</h1>
		<table>
			<form action="" method="POST">
				<tr>
					<th align="center"><label>firstvalue</label></th><th align="center"><label>secondvalue</label></th><th align="center"><label>height</label></th>
				</tr>
				<tr>
					<td align="center"><input type="text" name="firstvalue"></td><td align="center"><input type="text" name="secondvalue"></td><td align="center"><input type="text" name="height"></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="submitabha" value="Calculate Area"></td>
				</tr>
			</form>
		</table>
		<?php
		if (isset($_POST["submitabha"])) {
		 	$firstvalue = $_POST["firstvalue"];
		 	$secondvalue = $_POST["secondvalue"];
		 	$height = $_POST["height"];

		 	$area = ($firstvalue + $secondvalue) * $height / 2;
		 	echo '<input type="number" value="'.$area.'">';
		 } 
		?>
	</div>
</body>
</html>