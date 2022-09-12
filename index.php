<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement D'un Article</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="indexx.css">
	<link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.min.css" media="screen">

</head>
<body>
	<div align="center">
<h1 style="color:#800080; background-color:orange;">Ajouter un client</h1>
	<form action="insertion.php" method="POST">

	<table class="table table-bordered">
		<tr>
			<td ><label for="nom">nom:</label></td>
			<td><input type="text" name="nom" placeholder="nom" class="form-control"></td>	
		</tr>
		<tr>
			<td style="background-color: #40e0d0"><label for="age">age:</label></td>
			<td><input type="number" name="age" placeholder="Votre age" class="form-control"></td>
		</tr>
	<tr>
			<td colspan="2" align="center">
				<button type="submit" class="btn btn-success" name="ajouter">
						<span class="glyphicon glyphicon-plus"></span>&nbsp;Ajouter un information
				</button>
			</td>
		</tr>
		
		</table>
	</form>

</div>
</body>
</html>