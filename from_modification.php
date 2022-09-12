<?php 
$objetpdo=new PDO('mysql:host=localhost;dbname=client','root','');
//Preparation de la rêquete
$pdostat=$objetpdo->prepare('SELECT * FROM clinets WHERE id=:num');
$num=isset($_GET['numarticle'])? $_GET['numarticle']:0;

//liaison du paramètre nommée
$pdostat->bindParam(':num',$num);

//exécution de la requête
$pdostat->execute();

//on récupère le contact
$resultat=$pdostat->fetch(PDO::FETCH_ASSOC);
//Requete de modification des données
if(isset($_POST['ajour'])){
	$prix=trim(htmlspecialchars($_POST['nom']));
	$datexp=trim(htmlspecialchars($_POST['age']));


	if (empty($nom)) {
		$erreur="veuillez saisir votre nom svp!";
	}elseif (empty($age)) {
		$erreur="veuillez saisir votre age";
	}else{
      $pdostat1=$objetpdo->prepare('UPDATE clients SET nom=:nom, age=:age WHERE id=:num ');
        $pdostat1->bindParam(':nom',$nom);
		$pdostat1->bindParam(':age',$age);
		$pdostat1->bindParam(':num',$num);
		$pdostat1->execute();
		$succes=true;
		header("Refresh:2");
		$message="<span style='color:green;font-size:21px'>votre article à bien été modifier</span>";

	}
}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>from modification</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="indexx.css">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">
</head>
<body>

<div align="center">
<h1> modifier le contact</h1>
	<form action="" method="POST">

	<table class="table table-bordered">
	
		<tr>
			<td><label for="nom">Nom:</label></td>
			<td><input type="text" name="nom" placeholder="nom" class="form-control" value="<?php echo isset($resultat['nom'])? $resultat['nom']:'';?>" ></td>	
		</tr>
		<tr>
			<td><label for="age">age:</label></td>
			<td><input type="text" name="age" placeholder="age"  class="form-control" value="<?php echo isset($resultat['age'])? $resultat['Age']:'';?>" ></td>
		</tr>
		<tr  >
			<td colspan="2" align="center">
				<button type="submit" class="btn btn-primary" name="ajour">
						<span class="glyphicon glyphicon-ok"></span>&nbsp;Enregistrer modification
				</button>
			</td>
		</tr>
		</table>
	</form>
<?php 
		if(isset($message)){
			echo $message;
		}

		if(isset($erreur)){
			echo $erreur;
		}


 ?>
	<button type="button" type="btn btn-info-lg" style="text-decoration: none;">
	<a href="lister.php"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;consulté information</a>
	</button>

</body>
</html>