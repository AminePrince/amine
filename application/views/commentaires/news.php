<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action=<?php echo base_url()."/commentaire/create"; ?> method="post">
		<table>
			<tr>
				<td><label for="pseudo"></label>Pseudo</td>
				<td><input type="text" name="pseudo"></td>
			</tr>
			<tr>
				<td><label for="commentaire"></label>Commentaire</td>
				<td><TEXTAREA name="commentaire"></TEXTAREA> </td>
			</tr>
			<tr>
				<td><label for="save"></label>Save</td>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>