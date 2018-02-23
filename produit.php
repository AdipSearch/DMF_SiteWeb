<?php
include 'bdd_connexion.php';

function filtrer_produit() { //fonction permettant de filtrer les produits grâce aux checkbox
	global $pdo; //global permet d'aller chercher la variable en dehors de la fonction

	try {

		$query = 'SELECT * FROM produits';
		$i=1;
			foreach($_GET['critere'] as $critere) { //parcours le tableau critere faisant référence aux checkbox critere
				$query .=  " INNER JOIN produits_has_critere AS phc$i ON produits.idProduits = phc$i.produits_idProduits AND phc$i.critere_idcritere = ?"; //pour afficher uniquement les produits cumulant les critere selectionnes
				$i++;
			//}


			$req = $pdo->prepare($query);

			$req->execute($_GET['critere']);
		}
	} catch (Exception $e) {
		//var_dump($e);
	}
	return $req;
};

function afficher_filtre() { //fonction pour afficher les checkbox des filtres en allant cherher l'id et le nom du critère
	global $pdo;

	$req = $pdo->query('SELECT * FROM critere');
	return $req;
};

function afficher_produit() { //fonction pour afficher tous les produits contenus dans la bdd
	global $pdo;
	$req = $pdo->query('SELECT * FROM produits');
	return $req;
};

function verif_url_exists(){
	global $pdo;
	$reqNewUrl = $pdo->prepare("SELECT * FROM DMF.produits WHERE lien = ?");
	$reqNewUrl->execute([$_POST['url']]);
	$urlexist = $reqNewUrl->rowCount();
	return $urlexist;
};

function inserer_produit(){
	global $pdo;
	$newUrl = htmlspecialchars($_POST['url']);
	$newDescription = htmlspecialchars($_POST['description_produit']);
	$newMarque = htmlspecialchars($_POST['marque']);
	$newKeyword = htmlspecialchars($_POST['keyword']);
	$newUrlpic = htmlspecialchars($_POST['urlpic']);
	
	$sql = $pdo->prepare('INSERT INTO DMF.produits(type,lien,photo,description, marque_idMarque) VALUES (:keyword, :url, :urlpic, :description, :marque)');
	$sql -> bindParam(':keyword', $newKeyword);
	$sql -> bindParam(':url', $newUrl);
	$sql -> bindParam(':urlpic', $newUrlpic);
	$sql -> bindParam(':description', $newDescription);
	$sql -> bindParam(':marque', $newMarque);

	$req = $sql->execute();
	return $req;
};

function inserer_label($idProduit, $labels){
	global $pdo;
	$sql = $pdo->prepare('INSERT INTO DMF.produits_has_label(label_idLabel, produits_idProduits) VALUES (:labelid, :produitid)');

	$sql -> bindParam(':produitid', $idProduit);

	//parcours le tableau label[] faisant référence aux checkbox label à relier au produit ajouter
	foreach($labels as $label) { 

		$sql -> bindParam(':labelid', $label);
		$req = $sql->execute();

	}
};

function inserer_critere($idProduit, $criteres){
	global $pdo;
	$sql = $pdo->prepare('INSERT INTO DMF.produits_has_critere(critere_idcritere, produits_idProduits) VALUES (:critereid, :produitid)');

	$sql -> bindParam(':produitid', $idProduit);

	//parcours le tableau critere[] faisant référence aux checkbox critere à relier au produit ajouté
	foreach($criteres as $critere) { 

		$sql -> bindParam(':critereid', $critere);
		$req = $sql->execute();

	}
};