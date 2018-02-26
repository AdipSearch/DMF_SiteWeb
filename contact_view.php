<!DOCTYPE html>
<html>
<head>
	<title>Dress Me Fair</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.css">

	<!-- CSS Vendor -->
	
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<!-- CSS Perso -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

</head>
<body>

										<!--HEADER-->
	<header>
		<?php include('header_view.php') ?>
	</header>
									<!--MAIN CONTENT-->

	

	<p>
	<img src="img/photovelocontact3.jpg" alt="Velo dans une cour" />
	</p>

	<!-- FORMULAIRE -->

<div class="container">
		

			<form method="POST" action="contact.php" >
   					<div class="row">
       					<div class="col">
			                <div class="form-group">
			                    <label for="inputname">Votre nom</label><br />

			                    <input type="text" name="name" class="form-control" id="inputname" required/><br /><br />
			                </div>
      					</div>

			            <div class="col">
			                <div class="form-group">
			                    <label for="inputemail">Votre email</label><br />

			                    <input type="email" name="email" class="form-control" id="inputemail" required/><br /><br />

			                    
			                </div>
			            </div>
     				</div>   
  <div class="w-100"></div>
		            <div class="col">
		                <div class="form-group">
		                    <label for="inputmessage">Votre message</label>
		                    <textarea id="inputmessage" name="message" class="form-control" required></textarea>
		                </div>
            
		                <input type="submit" name="contactform" class="btn btn-custom2" value="Envoyer"/>
		            </div>
				<div class="col">	        
			        <div class="box information">
						
						<p>N'hésitez pas à nous contacter pour toutes demandes d'information à propos du site, de l'application ou de l'extension.<br>Vous pouvez également nous laisser vos suggestions concernant le fonctionnement et l'amélioration du site ou pour toute demande commerciale.<br>Soyez certains que nous prendrons le plus grand soin quant au traitement de votre demande et que nous vous répondrons le plus rapidement possible :)</p>
					

					</div>
				</div>
	</form>


</div>

	<!-- INFORMATION -->

		
	</div>

										<!--FOOTER-->
	

	<footer>
		<?php include('footer_view.php') ?>
	</footer>
</body>
</html>
