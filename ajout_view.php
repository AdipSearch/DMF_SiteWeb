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


									<input type="checkbox"  name="label[]" value="1" id="fairtrade">
									<label for="fairtrade"><img  class="logo" src="img/fairtrade-logo B&W.png" alt="logo commerce équitable"></label>

									<input type="checkbox"  name="label[]" value="2" id="fairwear">
									<label for="fairwear"><img class="logo" src="img/fair-wear-foundation-logo.png" alt="Logo Habits équitables"></label>
									<input type="checkbox" name="label[]" value="3" id="gots">
									<label for="gots"><img  class="logo" src="img/gots-1 copie b&w .png" alt="Logo GOTS"></label>
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
								<option value="null">---</option>
								<option value="1">Veja</option>
								<option value="2">Panafrica</option>
								<option value="3">Sezane</option>
								<option value="4">Ethletic</option>
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

									<input type="checkbox" name="critere[]" value="1" id="humain">
									<label for="humain">Humain</label>					
									<input type="checkbox" name="critere[]" value="2" id="vegan">
									<label for="vegan">Vegan</label>
									<input type="checkbox" name="critere[]" value="3" id="ecolo">
									<label for="social">Écologique</label>
									<input type="checkbox" name="label[]" value="4" id="solidaire">
									<label for="solidaire">Solidaire</label>
									<input type="checkbox" name="critere[]" value="5" id="local">
									<label for="local">Local</label>
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

		