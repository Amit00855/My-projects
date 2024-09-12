<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My own page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style/style.xss">
	<script src="https://kit.fontawesome.com/71d7023f1a.js" crossorigin="anonymous"></script>
	<style type="text/css">
		table, tr, th, td {
			border: 3px solid grey;
			border-collapse: collapse;
		}
		#myBtn{
			display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 1;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            border:2px solid white;
		}
		#myBtn:hover {
            background-color: #555;
          }
		.arithmetic{
			background-color: #98e805;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
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
		.arithmetic input{
			font-size: 15px;
		}
		.tabh{
			background-color: yellow;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
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
		.tabh input{
			font-size: 15px;
		}
		.alb{
			background-color: greenyellow;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.alb input{
			font-size: 15px;
		}
		.ep{
			background-color: olive;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
            font-weight: 1;
			text-transform: uppercase;
		}
		.ep input{
			font-size: 15px;
		}
		.vlbh{
			background-color: lightcoral;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
            font-weight: 1;
			text-transform: uppercase;
		}
		.vlbh input{
			font-size: 12px;
		}
		.plb{
			background-color: cyan;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
            font-weight: 1;
			text-transform: uppercase;
		}
		.plb input{
			font-size: 15px;
		}
		.pcs{
			background-color: lightpink;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.pcs input{
			font-size: 15px;
		}
		.lcs{
			background-color: blueviolet;
			height: 800px;
			padding: 0px;
			padding-top: 300px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		h1{
			text-align: center;
			padding: 0px;
			margin: 0px;
			font-family: monospace;
			font-size: 2em;
			font-weight: 1;
			text-transform: uppercase;
		}
		.lcs input{
			font-size: 15px;
		}
		.abha{
			background-color: lightcoral;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
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
			font-size: 12px;
		}
		.clbh{
			background-color: greenyellow;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
			margin-bottom: 10px;
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
			font-size: 12px;
		}
		.single{
			background-color: #ccbf10;
			height: 800px;
			padding-top: 350px;
			max-width: 800px;
			margin: 0 auto;
			border-radius: 5px;
		}
		h2{
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
		.single input{
			font-size: 12px;
		}
		table{
			margin: 0 auto;
		}
		tr{
			text-align: center;
			font-size: 2em;
		}
		td{
			border: 1px solid #141413;
            padding: 8px;
            text-align: center;
		}
		body{
			padding-top: 50px;
			padding-bottom: 50px;
			background-color: lightgrey;
		}
		@media screen and (max-width: 600px){
			#leftsidebar {width: 200px; float: left;}
			#main {margin-left: 216px;}
			body{
				background-color: red;
			}
		}
		.navbar{
			background-color: lightskyblue;
			position: fixed;
			top: 0px;
			right: 0px;
			left: 0px;
		}
	</style>
</head>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	 <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>

         <script type="text/javascript">
        $(window).on('scroll', function(){
            if($(window).scrollTop()){
               $('nav').addClass('black');
            }else{
                 $('nav').removeClass('black');
            }
        })
  </script>
	<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Webpage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Arithmetic</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Area of Triangle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Area of Rectangle</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">EvenPrime</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Volume</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Perimeter</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Profit</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Loss</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Area of Trapezoid</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">CSA</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="#">Martial Status</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="arithmetic" id="arithmetic">
        <h1>Arithmetic</h1>
        <table>
            <form action="" method="POST">
                <tr>
                    <th align="center"><label>Firstvalue</label></th><th><label>Secondvalue</label></th>
                </tr>
                <tr>
                    <td align="center"><input type="text" name="Firstvalue" value="<?php if (isset($_POST["Firstvalue"])) print $_POST["Firstvalue"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Secondvalue" value="<?php if (isset($_POST["Secondvalue"])) print $_POST["Secondvalue"]; ?>" placeholder="Enter No."></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="submitafs" value="Add"><input type="submit" name="submitsfs" value="Sub"><input type="submit" name="submitmfs" value="Mul"><input type="submit" name="submitdfs" value="Div"></td>
                </tr>
            </form>
        </table>
        <?php
        if (isset($_POST["submitafs"])) {
            $Firstvalue = $_POST["Firstvalue"];
            $Secondvalue = $_POST["Secondvalue"];

            $add = $Firstvalue + $Secondvalue;
            echo "Addition is" .$add;
        }

        if (isset($_POST["submitsfs"])) {
            $Firstvalue = $_POST["Firstvalue"];
            $Secondvalue = $_POST["Secondvalue"];

            $sub = $Firstvalue - $Secondvalue;
            echo "Subtraction is" .$sub;
        }

        if (isset($_POST["submitmfs"])) {
            $Firstvalue = $_POST["Firstvalue"];
            $Secondvalue = $_POST["Secondvalue"];

            $mul = $Firstvalue * $Secondvalue;
            echo "Multiplication is" .$mul;
        }

        if (isset($_POST["submitdfs"])) {
            $Firstvalue = $_POST["Firstvalue"];
            $Secondvalue = $_POST["Secondvalue"];

            $div = $Firstvalue / $Secondvalue;
            echo "Division is" .$div;
        }
    ?>
    </div>
	<div class="tabh" id="tabh">
		<h1>Area of Triangle</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Base</label></th><th align="center"><label>Height</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Base" value="<?php if (isset($_POST["Base"])) print $_POST["Base"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Height" value="<?php if (isset($_POST["Height"])) print $_POST["Height"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submittbha" value="Calculate Area">
				</td>
			</tr>
		</form>
	</table>
<?php
	if (isset($_POST["submittbha"])) {
	$Base =$_POST["Base"];
	$Height =$_POST["Height"];

	$area= ($Base * $Height)/2;
	echo '<input type="number" value="'.$area.'">';
    }
?>
</div>
<div class="alb" id="alb">
	<h1>Area of Rectangle</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Length</label></th><th align="center"><label>Breadth</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Length" value="<?php if (isset($_POST["Length"])) print $_POST["Length"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Breadth" value="<?php if (isset($_POST["Breadth"])) print $_POST["Breadth"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitalb" value="Calculate Area"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitalb"])) {
	 	$Length = $_POST["Length"];
	 	$Breadth = $_POST["Breadth"];

	 	$area = $Length * $Breadth;
	 	echo '<input type="number" value="'.$area.'">';
	 } 
	?>
</div>
<div class="ep" id="ep">
	<h1>Even Prime</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Enter a number</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="input" value="<?php if (isset($_POST["input"])) print $_POST["input"]; ?>" placeholder="Enter No."><br><br><input class="text-center" type="submit" name="submitep" value=" Even or Prime"></td>
			</tr>
		</form>
	</table>
	<?php 
	if (isset($_POST["submitep"])) {
		$input=$_POST['input'];
		for ($i=2; $i <=$input ; $i++) { 
			if ($input%$i==0) {
				$value= True;
			}
		}
		if (isset($value)&& $value) {
			echo'the number '.$input.' is even';
		} else {
			echo'the number '.$input.' is prime';
		}
	}
	?>
</div>
<div class="vlbh" id="vlbh">
	<h1>Volume of Cuboid</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Length</label></th><th align="center"><label>Breadth</label></th><th align="center"><label>Height</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Length" value="<?php if (isset($_POST["Length"])) print $_POST["Length"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Breadth" value="<?php if (isset($_POST["Breadth"])) print $_POST["Breadth"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Height" value="<?php if (isset($_POST["Height"])) print $_POST["Height"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitvlbh" value="Calculate Volume"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitvlbh"])) {
	 	$Length = $_POST["Length"];
	 	$Breadth = $_POST["Breadth"];
	 	$Height = $_POST["Height"];

	 	$volume = $Length * $Breadth * $Height;
	 	echo '<input type="number" value="'.$volume.'">';
	 } 
	?>
</div>
<div class="plb" id="plb">
	<h1>Perimeter of Rectangle</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Lenght</label></th><th align="center"><label>Breadth</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Length" value="<?php if (isset($_POST["Length"])) print $_POST["Length"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Breadth" value="<?php if (isset($_POST["Breadth"])) print $_POST["Breadth"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submitplb" value="Calculate Perimeter"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitplb"])) {
	 	$Length = $_POST["Length"];
	 	$Breadth =$_POST["Breadth"];

	 	$perimeter = 2 * ( $Length * $Breadth );
	 	echo '<input type="number" value="'.$perimeter.'">';
	 } 
	?>
</div>
<div class="pcs" id="pcs">
	<h1>Profit</h1>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Sellingprice</label></th><th align="center"><label>Costprice</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Sellingprice" value="<?php if (isset($_POST["Sellingprice"])) print $_POST["Sellingprice"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Costprice" value="<?php if (isset($_POST["Costprice"])) print $_POST["Costprice"]; ?>" placeholder="Enter No."></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submitpcs" value="Calculate Profit"></td>
			</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitpcs"])) {
		$Sellingprice = $_POST["Sellingprice"];
	 	$Costprice = $_POST["Costprice"];
	 	
	 	$profit= $Sellingprice - $Costprice;
	 	echo '<input type="number" value="'.$profit.'">';
	 } 
	?>
</div>
<div class="lcs" id="lcs">
	<h1>Loss</h1>
	<table>
		<form>
		<tr>
			<th align="center"><label>Costprice</label></th><th align="center"><label>Sellingprice</label></th>
		</tr>
		<tr>
			<td align="center"><input type="text" name="Costprice" value="<?php if (isset($_POST["Costprice"])) print $_POST["Costprice"]; ?>" placeholder="Enter No."></td><td align="center"><input type="text" name="Sellingprice" value="<?php if (isset($_POST["Sellingprice"])) print $_POST["Sellingprice"]; ?>" placeholder="Enter No."></td>
		</tr>
		<tr>
			<td align="center" colspan="3"><input type="submit" name="submitlcs" value="Calculate Loss"></td>
		</tr>
		</form>
	</table>
	<?php
	if (isset($_POST["submitlcs"])) {
	 	$Costprice = $_POST["Costprice"];
	 	$Sellingprice = $_POST["Sellingprice"];

	 	$loss = $Costprice - $Sellingprice;
	 	echo '<input type="number" value="'.$loss.'">';
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
	<div class="single">
	<h2><b>Salary Tax</b></h2>
	<table>
		<form action="" method="POST">
			<tr>
				<th align="center"><label>Income</label></th>
				<th align="center"><label>Martial Status</label></th>
			</tr>
			<tr>
				<td align="center"><input type="text" name="Income" id="Income" value="<?php if (isset($_POST["Income"])) print $_POST["Income"]; ?>" placeholder="Enter No." required></td>
				<td align="center"><select id="martial_status" name="Martial_Status">
				<option value="single">Single</option>
				<option value="married">Married</option></select></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submitsingle" value="Calculate Salary Tax"></td>
			</tr>
		</form>
	</table>
	<?php
	$Income = 0;
	if (isset($_POST["submitsingle"])) {
		$Income = $_POST["Income"];
		$Martial_Status = $_POST["Martial_Status"];
		if ($Martial_Status=="married") {
		if ($Income<=600000){
			$ft = $Income * 0.01;
			echo '<input type="number" value="'.$ft.'">';
		}elseif ($Income<=800000) {
			$st = (800000 - $Income) * 0.10;
			echo '<input type="number" value="'.$st.'">';
		}elseif ($Income<=1100000) {
			$tt = (1100000 - $Income) * 0.20;
			echo '<input type="number" value="'.$tt.'">';
		}elseif ($Income<=2000000){
			$fft = (2000000 - $Income) * 0.30;
			echo '<input type="number" value="'.$fft.'">';
		}elseif ($Income<=5000000) {
			$t = (5000000 - $Income) * 0.36;
			echo '<input type="number" value="'.$t.'">';
		}elseif ($Income<=10000000) {
			$sst = (10000000 - $Income) * 0.39;
			echo '<input type="number" value="'.$sst.'">';
		}
		}else  {
			if ($Income<=500000) {
			$ft = $Income * 0.01;
			echo '<input type="number" value="'.$ft.'">';
		}elseif ($Income<=700000) {
			$st = (700000 - $Income) * 0.10;
			echo '<input type="number" value="'.$st.'">';
		}elseif ($Income<=1000000) {
			$tt = (1000000 - $Income) * 0.20;
			echo '<input type="number" value="'.$tt.'">';
		}elseif ($Income<=2000000){
			$fft = (2000000 - $Income) * 0.30;
			echo '<input type="number" value="'.$fft.'">';
		}elseif ($Income<=5000000){
			$t = (5000000 - $Income) * 0.36;
			echo '<input type="number" value="'.$t.'">';
		}elseif ($Income<=10000000){
			$sst= (10000000 - $Income) * 0.39;
			echo '<input type="number" value="'.$sst.'">';
			}
		}
	
	}	
	?>
</div>
</body>
</html>