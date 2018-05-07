<!DOCTYPE html>
<html>
<head>
	<title>Propeller</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<style type="text/css">
	body{
		background-color: black;
	}
		#container{
			min-width: 290px;
			position: fixed;
			top:50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: rgb(255,255,255);
			width: 60%;
			padding: 15px;
		}

		#section1{
			width: 99.5%;
			height: 100px;
			background-color: rgba(191,106,196,100);
			margin-bottom: 5px;
			border-left: 2px solid rgb(145,75,150);
			border-right: 2px solid rgb(145,75,150);
			border-bottom: 4px solid rgb(145,75,150);
		}	

		#section2{
			width: 99.5%;
			height: 100px;
			background-color: rgba(191,106,196);
			margin-bottom: 5px;
			border-left: 2px solid rgb(145,75,150);
			border-right: 2px solid rgb(145,75,150);
			border-bottom: 4px solid rgb(145,75,150);
		}	

		#section3{
			width: 99.5%;
			height: 100px;
			background-color: rgba(191,106,196);
			border-left: 2px solid rgb(145,75,150);
			border-right: 2px solid rgb(145,75,150);
			border-bottom: 4px solid rgb(145,75,150);
		}	
		
		
		#text1{
			display: none;
		}

		#text2{
			display: none;
		}

		#text3{
			display: none;
		}
		
		.textStyle{
			font-family: Helvetica;
			font-size: 20px;
			font-weight:100;
			color: rgb(100, 100, 100);
       		line-height: 1.3em;
			padding: 20px;
			background-color: rgb(255,255,255);
		}
		
		#menu1{
			border-right: 1px solid rgb(211,211,211);
			border-left: 1px solid rgb(211,211,211);
			margin: 2px;
		}
		
		#menu2{
			border-right: 1px solid rgb(211,211,211);
			border-left: 1px solid rgb(211,211,211);
			margin: 2px;
		}

		#menu3{
			border-right: 1px solid rgb(211,211,211);
			border-left: 1px solid rgb(211,211,211);
			margin: 2px;
		}

		#menu1:hover #section1{
			background-color: rgba(143,30,255);
			border-left: 2px solid rgb(102,0,102);
			border-right: 2px solid rgb(102,0,102);
			border-bottom: 4px solid rgb(102,0,102);			
		}

		#menu2:hover #section2{
			background-color: rgba(143,30,255);
			border-left: 2px solid rgb(102,0,102);
			border-right: 2px solid rgb(102,0,102);
			border-bottom: 4px solid rgb(102,0,102);
		}

		#menu3:hover #section3{
			background-color: rgba(143,30,255);
			border-left: 2px solid rgb(102,0,102);
			border-right: 2px solid rgb(102,0,102);
			border-bottom: 4px solid rgb(102,0,102);
		}

		#menu1:hover #text1{
			display: block;
		}

		#menu2:hover #text2{
			display: block;
		}

		#menu3:hover #text3{
			display: block;
		}

		#menu1:hover #arrow1{
			transform: rotate(90deg);
		}

		#menu2:hover #arrow2{
			transform: rotate(90deg);
		}

		#menu3:hover #arrow3{
			transform: rotate(90deg);
		}

		.SectionName{
			font-size: 200%;
			color: white;
			font-family: "Arial";
			font-style: italic;
			font-weight: bold;
			width: 30%;
			float: left;
			padding-left: 8px;
			padding-top: 30px;
			min-width: 200px;
		}

		#arrow1{
			font-size: 300%;
			color: white;
			float: right;
			margin-right: 12px;
			margin-top: 20px;
			transform: rotate(270deg);
		}

		#arrow2{
			font-size: 300%;
			color: white;
			float: right;
			margin-right: 12px;
			margin-top: 20px;
			transform: rotate(270deg);
		}

		#arrow3{
			font-size: 300%;
			color: white;
			float: right;
			margin-right: 12px;
			margin-top: 20px;
			transform: rotate(270deg);
		}

	</style>
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



<script type="text/javascript">

 function Show_Hide1(){

 	if (document.getElementById("text1").style.display === "block"){
 		document.getElementById("text1").style.display = "none";
 		document.getElementById("arrow1").style.transform= "rotate(-90deg)";
 	} else {

		document.getElementById("text1").style.display = "block";
 		document.getElementById("text2").style.display = "none";
        document.getElementById("text3").style.display = "none";

        document.getElementById("arrow1").style.transform= "rotate(90deg)";
        document.getElementById("arrow2").style.transform= "rotate(-90deg)";
        document.getElementById("arrow3").style.transform= "rotate(-90deg)";

			}
	}

function Show_Hide2(){
	if (document.getElementById("text2").style.display === "block"){
 		document.getElementById("text2").style.display = "none";
 		document.getElementById("arrow2").style.transform= "rotate(-90deg)";
 	} else {
		document.getElementById("text1").style.display = "none";
 		document.getElementById("text2").style.display = "block";
        document.getElementById("text3").style.display = "none";
        document.getElementById("arrow1").style.transform= "rotate(-90deg)";
        document.getElementById("arrow2").style.transform= "rotate(90deg)";
        document.getElementById("arrow3").style.transform= "rotate(-90deg)";
		}
	}

function Show_Hide3(){
	if (document.getElementById("text3").style.display === "block"){
 		document.getElementById("text3").style.display = "none";
 		document.getElementById("arrow3").style.transform= "rotate(-90deg)";
 	} else {
		document.getElementById("text1").style.display = "none";
 		document.getElementById("text2").style.display = "none";
        document.getElementById("text3").style.display = "block";
        document.getElementById("arrow1").style.transform= "rotate(-90deg)";
        document.getElementById("arrow2").style.transform= "rotate(-90deg)";
        document.getElementById("arrow3").style.transform= "rotate(90deg)";
		}
	}
  
</script>

</body>
</html>