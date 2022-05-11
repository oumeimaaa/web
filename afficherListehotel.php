<?php
	include_once '../controller/ChambreController.php';
	$Chambre1=new ChambreController();
	$listeChambres=$Chambre1->afficherChambre(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterChambre.php">Ajouter Chambre</a></button>
		<center><h1>Liste des Chambres</h1></center>
		<table border="1" align="center">
			<tr>
				<th>num</th>
				<th>vue</th>
				<th>Type</th>
				<th>etage</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeChambres as $Chambre){
			?>
			<tr>
				<td><?php echo $Chambre['num']; ?></td>
				<td><?php echo $Chambre['vue']; ?></td>
				<td><?php echo $Chambre['Type']; ?></td>
				<td><?php echo $Chambre['etage']; ?></td>
				<td>
				<a href="modifierChambre.php?num=<?php echo $Chambre['num']; ?>">Modifier</a>
				</td>
				<td>
					<a href="supprimerrChambre.php?num=<?php echo $Chambre['num']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>