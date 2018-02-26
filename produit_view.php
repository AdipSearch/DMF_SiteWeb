
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
	<link rel="stylesheet" type="text/css" href="css/style.css?timestamp=<?php echo time() ?> " media="screen" />
	<script
	src="http://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<?php include 'produit.php'; ?>




	
</head>
<!-- BODY -->
<body>

										<!-- HEADER -->
	<header>
	<?php include 'header_view.php' ?> 
	</header>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 criterenav sticky">
				<div class="col-md-12">
				<form method="get" action="produit_filtre_view.php">
					<div class="text-center">
						Trier les produits par critères :<br />
						<br />
					</div>	
		

		
				<!-- MAIN -->
		<?php 

		$req = afficher_filtre();
					while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
						?>
					<div class="form-check">
						<input type="checkbox" name="critere[]" value="<?php echo $donnees['idcritere']?>" id="<?php echo $donnees['idcritere']?>" /> <label for="<?php echo $donnees['idcritere']?>"><?php echo $donnees['nom_critere']?></label> <!-- on donne le même name à tous les champs, ce nom est un tableau critere. On modifie la value par le nom du critere qu'on veut afficher --> 
					</div>
						
					<?php } ?>

			
	
				<input  class="btn btn-custom3" type="submit" value="Envoyer" />
			</div>
			</div> <!-- FIN Col-md -->


			<div class=" cardsize col-xs-12 col-md-8">
				
		<?php
		$req = afficher_produit();


		while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
		?>
			<div class="card text-center" style="width: 18rem;">
				<div class="card-header">			
			 Modèle <?php echo $donnees['nom_produit']; ?>
			 	</div>
			
			 	

			Photo du produit : <img class=" card-img-top formpic" src="<?php echo $donnees['photo']; ?>"><br />

			 De type <?php echo $donnees['type']; ?><br />

			 Revendeurs : <a  class=" btn btn-custom2 btn-xs lienproduit" href="<?php echo $donnees['lien']; ?>">Shop</a><br />


			 Description: <?php echo $donnees['description']; ?><br />
			
			</div>
		<?php
		}

		?>
			</div> <!--FIN col-md-8-->
		</form>


	





	</div> <!--FIN ROW-->
</div> <!-- FIN CONTAINER -->
									<!--  FOOTER -->

<footer>
	<? include('footer_view.php') ?>
</footer>

</body>
</html>