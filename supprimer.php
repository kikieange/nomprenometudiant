<?php
//ouverture d'une connexion à la base de données aganda
$objetpdo=new PDO('mysql:host=localhost;dbname=client','root','');

//Preparation de la rêquete
$pdostat=$objetpdo->prepare('DELETE FROM clients WHERE id=:num LIMIT 1');

//liaison du paramètre nommée
$pdostat->bindValue(':num',$_GET['numarticle'], PDO::PARAM_INT);

//exécution de la requête
$executIsOk=$pdostat->execute(); 

if ($executIsOk){
	$message="<p class='p1'>Information à bien été suprimer</p>";
}else{
	$message="Echec de la suppression";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>document</title>
	<link rel="stylesheet" type="text/css" href="suprimer.css">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">
</head>
<body>
<h1 style="text-align: center;">supression</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
		<?php echo "<div class='alert alert-danger'>";
			 			 echo "<strong style='font-size:21px'>".$message."<strong>";
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