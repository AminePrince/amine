<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des produits</title>
</head>
<body oncontextmenu="return false;">
	<table border="1" width="80%" align="center" oncontextmenu="false">
		<tr>
			<td>Libellé</td>
			<td>Prix</td>
			<td colspan="2" align="center">Opération</td>

		</tr>
		<?php foreach ($products as $p): ?>
		
		<tr>
			<td><?php echo $p->libelle ; ?></td>
			<td><?php echo $p->prix ; ?></td>
			<td><a href="<?php echo site_url("produits/delete/$p->id"); ?>" 
			onclick=" return confirm('Voulez vous vraiment supprimer <?php echo $p->libelle; ?>');">
			Supprimer
			</a></td>
			<td><a href="<?php echo site_url("produits/show/$p->id"); ?>" >
			Consulter
			</a></td>
		</tr>

			
		<?php endforeach ?>
		
	</table>
</body>
</html>