<!DOCTYPE html>
<html>
<head>
	<title>Dress Me Fair</title>
	<meta charset="utf-8"/>
	<!-- 	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="css/bootstrap.css">	
	
	<!-- CSS Vendor -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<!-- CSS Perso -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<script
	src="http://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



	
</head>
<!-- BODY -->
<body>

	<!-- HEADER -->
	<header>
		<?php include 'header_view.php' ?>
	</header>
	<!-- CONTENU LANDING PAGE -->



	<!-- HEAD PICTURE -->

	<div class="imageheader">
		<img class="imagerock c" src="img/headerphoto.png" alt="Jeunes sur un rocher">
	</div>

	<!-- PRESENTATION -->

	<div class="container">
		<div class="presentation">

			<h2>Le Shopping Responsable</h2>
			<p>
				Mus par l'envie de vous offrir de nouveaux choix en matière de shopping , dresseme Fair désire vous proposer de nouvelles alternatives Economiques, Ecologiques et Responsables face à un marché de la mode saturé par le fast-fashion. 
			</p>

			

			<p>
				Sur cette page vous pouvez ajouter un produit que vous trouverez en adéquation avec nos critères et que vous avez envie de partager avec la communauté Dress Me Fair
			</p>
		</div>


	</div>


	<!--FORMULAIRE AJOUT DE PRODUIT -->


	<?php include('ajout_view.php') ?>			



</div> <!--DIV CONTAINER FLUID-->

<!-- APPLICATION ET EXTENSION -->

<?php include('extension_view.php') ?>

<!-- DIV Container Fluid -->							
<!--  FOOTER -->

<footer>
	<?php include('footer_view.php') ?>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>