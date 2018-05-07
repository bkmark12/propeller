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