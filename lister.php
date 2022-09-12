<?php

//ouverture d'une connexion à la base de données aganda
$objetpdo=new PDO('mysql:host=localhost;dbname=client','root','');

//préparation de la requête(LE thème preparation de la rêquete n'a pas trop de sens ici)
$pdostat=$objetpdo->prepare('SELECT * FROM clients ORDER BY Nom');

//exécution de la requête
$excuteIsOk=$pdostat->execute();

//récupération des résultats en une seul fois.(pour d'autres méthodes de récupération regardez les videos adéquat sur la playlist"PHP--PDO...)
$lignes=$pdostat->fetchall();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Documents</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="indexx.css">
		<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">
</head>
<body>
<h1 style="text-align: center;">Information Sur client Disponible Dans La Base De Donnée</h1>
<table class="table table-bordered table-responsive">
			<thead>
			<tr>
				<th>Nom</th>
		    	<th>Age</th>
		    	<th>modifier</th>
		    	<th>supprimer</th>

			</tr>
		</thead>
<ul style="list-style-type: none;">
<?php

foreach($lignes as $lignes):?>
	<li>
		<tr>
		<td><?php echo $lignes['Nom']?></td> 
		<td><?php echo $lignes['Age'] ?></td>  
			<td>
		<a href="from_modification.php?numarticle=<?=$lignes['id'] ?>"><span class="glyphicon glyphicon-edit ">
		</span></a>&nbsp;
	</td>
	<td>
		<a href="supprimer.php?numarticle=<?=$lignes['id']?>"><span class="glyphicon glyphicon-trash "></span></a>
		</td>
	
	</tr>
		
	</li>

<?php endforeach; ?> 
</ul>
</table>
<button type="button" type="btn btn-info-lg" style="text-decoration: none; margin-left:40%; ">
	<a href="index.php"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Enregistrer client</a>
	</button>
</body>
</html>