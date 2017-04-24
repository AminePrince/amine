<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	<table class="table">
    <thead>
      <tr>
        <th>Pseudo</th>
        <th>Commentaire</th>
      </tr>
    </thead>
    <tbody>
<table border = "1"> 
          
         <?php 
             echo "<td><a href =".base_url()."commentaire/news/>Add</a></td>"; 
            echo "<tr>"; 
            echo "<td>Id</td>"; 
            echo "<td>Pseudo.</td>"; 
            echo "<td>Commentaire</td>"; 
            echo "<td>Modifier.</td>"; 
            echo "<td>Supprimer</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->id."</td>"; 
               echo "<td>".$r->pseudo."</td>"; 
               echo "<td>".$r->commentaire."</td>"; 
               echo "<td><a href =".base_url()."commentaire/update/".$r->id.">Edit</a></td>"; 
               echo "<td><a href =".base_url()."commentaire/delete/".$r->id.">Delete</a></td>"; 
               echo "<tr>";
            } 
         ?>
      </table> 
     
    </tbody>
  </table>

</body>
</html>