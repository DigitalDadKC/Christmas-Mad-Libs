<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mad Libs Results!</title>
	<link rel="stylesheet" type="text/css" href="css/resultsmain.css" media="screen">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Mountains+of+Christmas" />
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
	<div class="container">
		<div id="layout">
  		<?php
		    $name = $_GET["name"];
		    $age = $_GET["age"];
		    $sibling = $_GET["sibling"];
		    $color = $_GET["color"];
		    $month = $_GET["month"];
		    $location = $_GET["location"];
		    $animal = $_GET["animal"];
				$verb = $_GET["verb"];
				$toy = $_GET['toy'];
				$celebrity = $_GET['celebrity'];?>
			  <h1>Dear Santa, </h1><br>
			  <p>My name is <span><?php echo strtoupper($name) ?></span> and I am <span><?php echo strtoupper($age) ?></span> years old. I have <span><?php echo strtoupper($sibling) ?></span> sisters, a <span><?php echo strtoupper($color) ?></span>
					cat, and I live in <span><?php echo strtoupper($location) ?></span>. My birthday is in <span><?php echo strtoupper($month) ?></span>.<br><br>

					I have been a very good <span><?php echo strtoupper($animal) ?></span> this year. I have been especially good at learning to <span><?php echo strtoupper($verb) ?></span>.
					 Please bring me a <span><?php echo strtoupper($toy) ?></span> for Christmas.</p><br><br>

					<h1>Yours truly, <br>
					<span><?php echo strtoupper($celebrity) ?></span></h1></br>
					<div class="santa">
						<div class="santa"><img src="images/christmas-sled-source_ulp.gif" alt=""></div>
					</div>
		</div>
	</div>
</body>

<script src="js/snowstorm.js"></script>

</html>
