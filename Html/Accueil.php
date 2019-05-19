<!DOCTYPE html>
<html>

	<?php

	//session_start();
	
    /*if(isset($_SESSION['email'])){
		include 'Header&Navigation&Footer.php';
	}
    else {
		include 'Header&FooterHorsConnexion.php';
	}*/
	
	?>

<head>
		
	
	<title>Domisep</title>
	<style type="text/css">
	h3 {text-shadow: 2px 14px 6px rgba(30, 64, 0, 0.5);font-family: 'Asap', fantasy, sans-serif;text-align: center;}
	.slider{
    margin: 20px 25%;
	overflow: hidden;
    height: 350px;
    width: 50%;
    border: 4px solid white;
    border-radius: 4px;  
    box-shadow: -2px 30px 40px rgba(30, 64, 0, 0.5);
}

.slider figure div{
	width: 20%;
	float: left;
}

.slider figure img{
    width: 100%;
    height: 100%;
	float: left;
}

.slider figure{
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: slide 18s linear infinite;}

@keyframes slide{0%{left: 0%}10%{left: 0%;}16%{left: -100%;}22%{left: -100%;}28%{left: -200%;}34%{left: -200%;}40%{left: -300%;}46%{left: -300%;}52%{left: -400%;}58%{left: -400%;}64%{left: -300%;}70%{left: -300%;}76%{left: -200%;}82%{left: -200%;}88%{left: -100%;}94%{left: -100%;}100%{left: 0%;}}


	</style>


</head>

<body>
	<br><br>
	<div class="slider">
			<figure>
				<div class="slide">
					<img src="Images/d.jpg">
				</div>
		
				<div class="slide">
					<img src="Images/fd.jpg">
				</div>
		
				<div class="slide">
					<img src="Images/s.jpg">
				</div>
		
				<div class="slide">
					<img src="Images/l.jpg">
				</div>
		
				<div class="slide">
					<img src="Images/M.jpg">
				</div>
			</figure>
		</div>
	<br>
	<br>
	<h3>
		Faciliter le maintien à domicile des seniors ? C'est possible ! Cette maison sécurisée est sans doute la solution que <em>Vous</em> attendiez
	</h3>

</body>
</html>