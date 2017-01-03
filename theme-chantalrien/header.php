<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="w3-theme-blue-grey.css">
<link rel="stylesheet" type="text/css" href="fontLobster.css">
<link rel="stylesheet" type="text/css" href="fontTangerine.css">
<link rel="stylesheet" type="text/css" href="fontRobotto.css">
<link rel="stylesheet" type="text/css" href="w3.css">

<style type="text/css">
	
html, body {font-family: "Robotto", Sans-serif}
	.w3-lobster {font-family: "Lobster", Sans-serif;}
	.w3-tangerine {font-family: "Tangerine", serif;}
	.w3-comic {font-family: "Comic Sans MS", cursive, sans-serif;}

#header {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    position: fixed;
    top: 0;
    width: 99%;
}

#navpc {
	min-width: 500px 
}

#navmob {
	text-align: left;
}

#side {
	position: fixed;
	top: 152px;
}

#footer {
	bottom: 0px;
	width: 100%;
}

</style>

<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
var fixmeTop = $('header').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('header').css({
            position: 'fixed',
            top: '0',
            left: '0'
        });
    } else {
        $('header').css({
            position: 'static'
        });
    }
});
</script>


	<meta charset="utf-8">
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="w3.css">
</head>
<body class="w3-theme-l2">
	
		<div id="header" class="w3-container w3-display-topmiddle w3-theme-d2 w3-round-large w3-card-2 w3-hide-small">
			<h2 class="w3-margin-left">Chantal RIEN Consultant</h2>
			<h3 class="w3-margin-left">Conseil et Prévention Santé</h3>
			<img src="logo1.png" class="w3-round w3-display-topright" style="width:12%;height:110px" alt="Logo">
			 <ul id="navpc" class="w3-navbar w3-round-large">
	  			<li class="w3-third w3-center w3-theme-d5 w3-lobster w3-large"><a href="accueil.html">Accueil</a></li>
	  			<li class="w3-third w3-center"> <div class="w3-accordion w3-theme-d5">
	  					<a onclick="myFunction('Demo1')" class="w3-center w3-lobster w3-large">
	    					Service
	  					</a>
	  					<div id="Demo1" class="w3-accordion-content w3-theme-d5 w3-round-large w3-lobster">
	    					<a href="service1.html">Structures Sociales et Sanitaires</a>
	    					<a href="service2.html">Lieux d'Accueil de Jeunes</a>
	    					<a href="service3.html">Entreprises</a>
	  					</div>
					</div></li>
	  			<li class="w3-third w3-center w3-theme-d5 w3-card-2 w3-lobster w3-large"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>

	<div id="side" class="w3-container w3-left-align w3-theme-d5 w3-round-large w3-hide-small" style="margin-left: 7px">
		<p><i class="fa fa-mobile-phone w3-margin-right" style="font-size:28px;color:darkblue"></i> 06.xx.xx.xx.xx</p>	
		<p><i class="fa fa-at w3-margin-right" style="font-size:22px;color:darkblue; margin-left: -3px"></i> mail@mail.fr</p>
	</div>

	<div  id="header" class="w3-container w3-display-topmiddle w3-theme-d2 w3-round-large w3-hide-large w3-hide-medium">
	<table>
		<tr>
			<td>
				<h3 class="w3-margin-left">Chantal RIEN</h3>
				<p class="w3-margin-left">Conseil et de Prévention Santé</p>
			</td>
			<td style="text-align: right;">
				<img src="logo1.png" class="w3-round w3-margin-right" style="width:67%;" alt="Logo">
			</td>
		</tr>
		</table>
		<ul id="navmob" class="w3-navbar w3-round-large">	  			
	  			<li class=""> <div class="w3-accordion w3-theme-d5">
	  					<a onclick="myFunction('Demo2')" class="w3-lobster w3-large">
	    					Menu<i class="fa fa-bars w3-xlarge" style="margin-left:300px;"></i>
	  					</a>
	  					<div id="Demo2" class="w3-accordion-content w3-theme-d5 w3-round-large w3-lobster">
	    					<a href="accueil.html">Accueil</a>
	    					<p class="w3-margin-left" href="#">Services :
		      	<a class="w3-margin-left" href="service1.html">Structures Sociales et Sanitaires</a>
	    		<a class="w3-margin-left" href="service2.html">Lieux d'Accueil de Jeunes</a>
	    		<a class="w3-margin-left" href="service3.html">Entreprises</a></p>
	    					<a href="Contact.html">Contact</a>
	  					</div>
					</div></li>	  			
			</ul>
  	</div>