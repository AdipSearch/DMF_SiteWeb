<?php include 'produit.php'; ?>

<div class="row col-xs-12 justify-content-md-center">
	<button class="btn btn-custom btn-lg" data-toggle="collapse" data-target="#addref">Ajoutez un produit</button>
</div>
<div class="collapse" id="addref">
	
	<form  method="POST" action="produit_ajout.php">
		<!--comm test-->
		<!--URL-->			<div class="container">
			<div class="row justify-content-md-center col-xs-12 col-md-12 col-lg-12">

				<fieldset class="url">
					<label for="url"></label>
					<input type="url" class="form-control" name="url" placeholder="" required/>
					<small class="form-text text-muted">Entrez l'url du produit que vous voulez ajouter à notre base de donnée ici</small>

				</fieldset>

			</div>


		</div>			

		<div class="container">	
			<div class="row">
				<div class="col-xs-12 col-md-6">

					<fieldset>
						<legend>Labels:</legend>

						<?php				$req = afficher_label();
					while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
					?> <div>
						<input type="checkbox" name="label[]" value="<?php echo $donnees['idLabel']?>" id="<?php echo $donnees['idLabel']?>" /> <label class="label" for="<?php echo $donnees['idLabel']?>"><img class="logo_img" src="img/<?php echo $donnees['logo_label']?>" alt="logo_label"></label> <!-->Affiche tous les labels de la base de données</!-->
					</div>
					<?php 
				} ?>

			</fieldset>

			<fieldset>

				<legend>Ajout de Mots clés:</legend>


				<input type="text" name="keyword">
				<small class="form-text text-muted"><em>(Ex: Chaussures, Stan Smith,...)</em></small>

				<label for="keyword" ></label>
			</fieldset>

		</div>


		<!--URLPICTURE LISTE MARQUE LINE-->		

		<div class="col-xs-12 col-md-6">

			<!-- LISTE MARQUE -->
			<fieldset>
				<legend>Indiquez la Marque du produit</legend>
				<label for="marque"></label>
				<select name="marque" id="marque">
					<?php				$req = afficher_marque();
					 while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
					 ?> 
					 	<option value="<?php echo $donnees['idMarque']?>" id="<?php echo $donnees['idMarque']?>"><?php echo $donnees['nom_marque']?></option> <!-->Affiche toutes les marques de la base de données dans la liste déroulante</!-->
					 
					 <?php 
					} ?>
					

				</select>
			</fieldset>

			<fieldset>

				<legend>URL de l'image</legend>
				<label for="urlpic"></label>
				<input type="url" name="urlpic" for="urlpic">
			</fieldset>	




		</div>



		<div class="col-xs-12 col-md-6">
			<fieldset>

				<legend>Critères:</legend>

				<?php				$req = afficher_filtre();
					while ($donnees = $req->fetch()) { //affiche les réponses de la requête jusqu'au dernier résultat
					?> <div>
						<input type="checkbox" name="critere[]" value="<?php echo $donnees['idcritere']?>" id="<?php echo $donnees['idcritere']?>" /> <label class="label" for="<?php echo $donnees['idcritere']?>"><?php echo $donnees['nom_critere']?></label> <!-->Affiche tous les critères de la base de données</!-->
					</div>
					<?php 
				} ?>
			</fieldset>

		</div>
		<div class="col-xs-12 col-md-6">
			<fieldset>

				<legend>Description:</legend>

				<textarea name="description_produit" class="form-control" id="message" rows="6" cols="30" placeholder="Entrez la desciption du produit ou laissez un commentaire ici :)" maxlength="280"></textarea>
				<br>
				<button class="btn btn-custom" type="submit" value="Envoyer" name="Go">Envoyer</button>

			</fieldset>
		</div>





	</div>			
</div>


</form> <!-- FIN DE LA FORM-->

</div>