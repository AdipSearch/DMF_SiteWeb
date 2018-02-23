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
	<link rel="stylesheet" type="text/css" href="css/DMFstyle.css" media="screen" />
	<?php include 'produit.php'; ?>
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
	<?php include('header_view.php') ?> 
	</header>

		<form method="get" action="produit_filtre_view.php">
			<p>
				Trier les produits par critères :<br /><br />
			</p>										<!-- MAIN -->
		<?php 

		$req = afficher_filtre();
					while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
						?> <p>
						<input type="checkbox" name="critere[]" value="<?php echo $donnees['idcritere']?>" id="<?php echo $donnees['idcritere']?>" /> <label for="<?php echo $donnees['idcritere']?>"><?php echo $donnees['nom_critere']?></label> <!-- on donne le même name à tous les champs, ce nom est un tableau critere. On modifie la value par le nom du critere qu'on veut afficher --> 
						</p>
					<?php 
					} ?>



				<input type="submit" value="Envoyer" />
				
		<?php
			if (!isset($_GET['critere'])) { //si aucun critère n'est coché, la page affiche tous les produits
						$req = afficher_produit();
						while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
						?>
							<p>
							 Chaussure <?php echo $donnees['nom_produit']; ?>, de type <?php echo $donnees['type']; ?><br />
							 Vous la trouverez en suivant ce lien : <a href="<?php echo $donnees['lien']; ?>">lien</a><br />
							 Description du produit : <?php echo $donnees['description']; ?><br />
							 Photo du produit : <img src="<?php echo $donnees['photo']; ?>"><br />
							</p>
						<?php
						};
					}
				else {
					$req = filtrer_produit();
					while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
					?>
						<p>
						 Chaussure <?php echo $donnees['nom_produit']; ?>, de type <?php echo $donnees['type']; ?><br />
						 Vous la trouverez en suivant ce lien : <a href="<?php echo $donnees['lien']; ?>">lien</a><br />
						 Description du produit : <?php echo $donnees['description']; ?><br />
						 Photo du produit : <img src="<?php echo $donnees['photo']; ?>"><br />
						</p>
					<?php
					}

					if (!$req->rowCount()) { //vérifie qu'il y ait des produits qui correspondent aux critères sélectionnés
						?>
						<p>Aucun produit ne correspond à ce(s) critère(s) ! </p>
						<?php 
					}
				}

		?>















										<!--  FOOTER -->

<footer>
	<?php include('footer_view.php') ?>
</footer>
<script src="js/bootstrap.js"></script>
</body>
</html>