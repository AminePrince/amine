<script type="text/javascript" src="<?php echo site_url('assets/jquery-3.2.0.js')  ?>"></script>
<?php if (isset($etudiant)) {
	$btn="modifier";

	$action="etudiants/update";
	}
	else {
		$btn="ajouter";

	$action="etudiants/create";

	}
 ?>

	<h2 id="notice"></h2>
	<div id="loader"  >Chargement en cours ...</div>
<form action="<?php echo  site_url($action); ?>" method="post" id="f">
	
	<?php if (isset($etudiant)): ?>

		<input type="text" name="id" value="<?php  echo $etudiant->id; ?>">
	
	<?php endif ?>
	
	<table>
		<tr>
			<td><label for="nom">Nom :</label></td>
<td><input type="text" name="nom" id="nom" value="
<?php if (isset($etudiant)) echo $etudiant->nom; ?>"></td>
		</tr>
		<tr>
			<td><label for="prenom">Prenom :</label></td>
			<td><input type="text" name="prenom" id="prenom" value="<?php if (isset($etudiant)) echo $etudiant->prenom; ?>"></td>
		</tr>
		<tr>
			<td><label for="classe">Classe :</label></td>
			<td><input type="text" name="classe" id="classe" value="<?php if (isset($etudiant)) echo $etudiant->classe; ?>"></td>
		</tr>
		<tr>
			<td><label for=""></label></td>
			<td><input id="btnok" type="submit" value="<?php echo $btn; ?>" ></td>
		</tr>
	</table>
</form>

<script >
	$("#f").submit(function(event) {

		event.preventDefault();
		$.ajax({
			url: '<?php echo site_url("etudiants/create")  ?> ',
			type: 'POST',
			//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			data: $("#f").serialize(),
		})
		.done(function() {
			console.log("success");
			get();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});

	function supprimer(id) {
		$("#loader").show();
		$.ajax({

			url: '<?php echo site_url("etudiants/delete/") ?>'+id,
			type: 'GET',
			//dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			//data: {id: id},
		})
		.done(function(data) {
			console.log("success Delete");
			//alert(data);
			$("#notice").text(data);
			get();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			$("#loader").hide();
		});
		
	}

	function get() {

		$.ajax({
			url: '<?php echo site_url("etudiants/index/json") ?>',
			type: 'GET',
			dataType: 'json',
			//data: {param1: 'value1'},
		})

		.done(function(data) {
			console.log("success");
			lien="<?php echo site_url('etudiants/show/'); ?>";
			s="";
			for (var i = 0; i < data.length; i++) {
				//alert(data[i].nom);
				s+="<tr>";
					s+="<td>"+ data[i].nom +" </td>";	
					s+="<td>"+ data[i].prenom +" </td>";
					s+="<td>"+ data[i].classe +" </td>";
					s+="<td> <a href='#' onclick=supprimer("+data[i].id+")>Supprimer</a> ";
					s+="<a href='#' class='mdf'>Editer</a> ";
					s+="<input  type='hidden' value="+data[i].id+">";
					s+="<a href='#' onclick=Consulter("+data[i].id+")>Consulter</a> </td>";


			s+="</tr>";
			}
			$("#body").html(s);
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	}

jQuery(document).ready(function($) {
	$("#loader").hide();

	get();
});

function Consulter(id) {
	 
	 $.ajax({
	 	url: '<?php echo site_url("etudiants/show/");?>'+id+'/json',
	 	type: 'GET',
	 	dataType: 'json',
	 	//data: {param1: 'value1'},
	 })
	 .done(function(data) {
	 	console.log("success");
		
		$("#nom").val(data.etud.nom);
		$("#prenom").val(data.etud.prenom);
		$("#classe").val(data.etud.classe);
	 })
	 .fail(function() {
	 	console.log("error");
	 })
	 .always(function() {
	 	console.log("complete");
	 });
	 
}

function modifier (id) {

	Consulter(id);
	
	$("#btnok").val("Modifier");



	$.ajax({
		url: '/path/to/file',
		type: 'default GET (Other values: POST)',
		dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}


$(".mdf").click(function(event) {
	
	alert($(this).parent().find("input[type='hidden']").val());
	//modifier($(this).parent().find('input[type="hidden"]'));
	});
</script>
