<!DOCTYPE html>
<html>
<head>
	<title>Propeller</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="propeller.css">	
</head>


<body>

<?php

	$url = 'http://design.propcom.co.uk/buildtest/accordion-data.json';
	$data = file_get_contents($url);
	$blocks = json_decode($data, true);

	$heading = array();
	$content = array();

	foreach($blocks['blocks'] as $arr){
	  array_push($heading, $arr['heading']);
	  array_push($content, $arr['content']);
	}

?>


	<div id="container">

		<div id="menu1">
			<div id="section1" onclick="Show_Hide1()">
				<div class="SectionName"> <?php echo $heading[0] ?> </div>
				<div id="arrow1"> &lt; </div>
			</div>
			<div id="text1" class="textStyle"> <?php echo $content[0]; ?> </div>
		</div>

		<div id="menu2">
			<div id="section2" onclick="Show_Hide2()">
				<div class="SectionName"> <?php echo $heading[1] ?> </div>
				<div id="arrow2"> &lt; </div>
			</div>
			<div id="text2" class="textStyle"> <?php echo $content[1]; ?> </div>
		</div>

		<div id="menu3">
			<div id="section3" onclick="Show_Hide3()">
			<div class="SectionName"> <?php echo $heading[2] ?> </div>
				<div id="arrow3"> &lt; </div>
			</div>
			<div id="text3" class="textStyle"><?php echo $content[2]; ?> </div>
		</div>

	</div>



<script type="text/javascript" src="propeller.js"></script>

</body>
</html>