<?php

//ouverture d'une connexion à la base de données aganda
$objetpdo=new PDO('mysql:host=localhost;dbname=client','root','');
if(isset($_POST['ajouter'])){
	$nom=trim(htmlspecialchars($_POST['nom']));
	$age=trim(htmlspecialchars($_POST['age']));


	if(empty($nom)){
		$erreur="veuillez entrez votre nom";
	}elseif(empty($age)){
		$erreur=" veuillez saisie votre âge";
	}
	if (!isset($erreur)) {
	$req=$objetpdo->prepare('INSERT INTO clients(Nom,Age) VALUES(:nom,:age)');

		$req->bindParam(':nom',$nom);
		$req->bindParam(':age',$age);
		$req->execute();
		$succes=true;
		$message="votre information a bien été enregister";
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>document</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">
</head>
<body>
	<h1 style="text-align: center;">INDENTIFIANT</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
		<?php echo "<div class='alert alert-info'>";
			 			echo "<strong>Félicitation</strong>!votre information a bien été enregister! ";
			 			echo "</div>";
			 				
?>
</div>
	
	<div class="col-md-12" style="text-align: center;font-size: 20px; color: grey;">
		<button type="button" type="btn btn-info-lg" style="text-decoration: none;">
	<a href="lister.php"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;consulté information</a>
	</button>
	</div>	
</div>
	</div>
</body>
</html>