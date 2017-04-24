  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action=<?php echo base_url()."commentaire/edit"?> method="post">
    <table>
    <tr>
        <td><label for="id"></label>Pseudo</td>
        <td><input type="text" name="id" readonly="" value="<?php echo $records[0]->id ?>"></td>
      </tr>
      <tr>
        <td><label for="pseudo"></label>Pseudo</td>
        <td><input type="text" name="pseudo" value="<?php echo $records[0]->pseudo ?> "></td>
      </tr>
      <tr>
        <td><label for="commentaire"></label>Commentaire</td>
        <td><TEXTAREA name="commentaire" ><?php echo $records[0]->commentaire ?></TEXTAREA></td>
      </tr>
      <tr>
        <td><label for="save"></label>Save</td>
        <td><input type="submit" value="Modifier"></td>
      </tr>
    </table>
  </form>
</body>
</html>

</body>
</html>