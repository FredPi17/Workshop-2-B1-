<?php 
include("fr.php");
?> 
<!DOCTYPE html> 
<html>
		<head> 
			<meta charset="utf-8" /> 
			<!--<link rel="stylesheet" href="index.css" /> <!--Pour toutle monde-->
			<!--<script src="raphael.2.1.0.min.js"></script> 
   			<script src="justgage1.0.min.js"></script>-->
   			<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
        	<script type="text/javascript" src="swipe.js"></script>

			<title>Index</title>
		</head>

	<body>
	<fieldset id="contenu">
		<aside id="gauche">
		</aside>
		<div id="main">
			<?php echo '<img src="'. $Questions[0]['Image'] .'"';?>
			<?php echo '<p>'. $Questions[0]['Intitulé'] . '</p>';?>
		</div>
		<aside id="droite">
		</aside>
		<div id="dashboard">
			<!--<div class="jauge" class="200x160px">
				<script> 
				    var g = new JustGage({ 
				    id: "gauge", 
				    value: 67, 
				    min: 0, 
				    max: 100, 
				    title: "Visitors" 
				    }); 
				</script>
			</div>
			<div class="jauge" class="200x160px">
				<script> 
				    var g = new JustGage({ 
				    id: "gauge", 
				    value: 67, 
				    min: 0, 
				    max: 100, 
				    title: "Visitors" 
				    }); 
    			</script>
			</div>
			<div class="jauge" class="200x160px">
				<script> 
				    var g = new JustGage({ 
				    id: "gauge", 
				    value: 67, 
				    min: 0, 
				    max: 100, 
				    title: "Visitors" 
				    }); 
				</script>
			</div>
			<div class="jauge" class="200x160px">
				<script> 
				    var g = new JustGage({ 
				    id: "gauge", 
				    value: 67, 
				    min: 0, 
				    max: 100, 
				    title: "Visitors" 
				    }); 
				</script>
			</div>-->
		</div>
		</fieldset>
	</body>
	
</html>
<style>
aside#gauche{
	/*float: left;*/
	border: 1px solid black;
	width: 20%;
	height: 80%;
}
aside#droite{
	/*float: right;*/
	border: 1px solid black;
	width: 20%;
	height: 80%;
}

img{
	opacity: 0.3;
	background-repeat: no-repeat;
	width: 100%;
	height: 100%;
}
#main{
	text-align: center;
	opacity: 50%;
	width: 50%;
	height: 80%;
}
#main, aside#gauche, aside#droite{
	display: inline-block;
}
body{
	text-align: center;
}
</style>
<script>
    $(document).keydown(function (e) {
        // Flèche gauche : 37
        if (e.keyCode == 37) {
                window.location = '/reponse.php?id=' +2 + '&r=g';
        }
        
        // Flèche droite : 39
        if (e.keyCode == 39) {
                window.location = '/reponse.php?id=' +2 + '&r=d';
        }
    });
    
    $("#contenu").touchwipe({
        wipeRight: function () {
                window.location = '/reponse.php?id=' +2 + '&ts=d';
        }, wipeLeft: function () {
                window.location = '/reponse.php?id=' +2 + '&ts=g';
        },
        preventDefaultEvents: false
    });
    
    
    
</script>