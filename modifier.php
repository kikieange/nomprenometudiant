<?php
//ouverture d'une connexion à la base de données aganda
$objetpdo=new PDO('mysql:host=localhost;dbname=client','root','');


if(isset($executeIsOk)){
	$message='information a bien été modifier';
}else{
	$message='Echec de la mise à jour de information';
}

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Résultat de la modification</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="indexx.css">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">
</head>
<body>
	<h1 style="text-align: center;">Résultat de la modification</h1>
      <div class="container">
	        <div class="row">
	            	<div  class="col-md-12" style="text-align: center;">
<p><?
if (isset($message)) {
	
	echo $message;
}

?></p>
                   </div>
                  <div lass="col-md-12" style="text-align: center;font-size: 20px; color: grey;">
                  <a href="lister.php">Listes Des informations</a>
                 </div>
           </div>
       </div>
</body>
</html>