<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body >
<?php echo validation_errors(); ?>
<div class="alert"><?php if(isset($notice)) echo $notice; ?></div>
	


	<?php 

	
	$this->load->view('etudiants/_form'); ?>

	<table border="1" width="600" align="center">
	<thead>
		<tr>
		<td>Nom : </td>
		<td>Prenom :</td>
		<td>Classe :</td>
		<td>Action :</td>
	</tr>
	</thead>
	<tbody id="body">
		
	</tbody>
	

</table>
</body>
</html>