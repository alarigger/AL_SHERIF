<?php
$page = false;
if (isset($_GET['page'])) {
$page = $_GET['page'];	
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
img {
  width:200px;
  height:300px;
}
</style>
</head>
<body>
	Hello there!
<br><br>
	<a href='index.php?page=images'>IMAGES</a><br><br>
	<a href='index.php?page=scene_list'>SCENES</a><br><br>
	<a href='index.php?page=runscript'>SCRIPT</a><br><br>
	
<form id="form">
 <p>script_name<input id="script_name" type="text" name="script_name" /></p>
  <p>selected scenes : 
	<?php
	  if ($page!=false) {
		  
		  include('pages/'.$page.'.php');

	  }
	?>
	</p>
 <p><input type="submit" value="OK"></p>

</form>

 <script src="lib/jquery.js"></script>
 <script>

$("#form").submit(function(e){ // On sélectionne le formulaire par son identifiant
    e.preventDefault(); // Le navigateur ne peut pas envoyer le formulaire
	
	var checkedScenes = $('.scene_row:checkbox:checked').map(function() {
		return this.name;
	}).get();
	
	var selected_script = $("#script_name").val();
	
	var selected_scenes_paths = checkedScenes .join(",");
	
	console.log(selected_scenes_paths);

   // var data_form = $(this).serialize(); // On créer une variable content le formulaire sérialisé
    var data_form = 'script_name='+selected_script+'&scene_paths='+selected_scenes_paths
     
    $.ajax({
       url : 'pages/runscript.php', // La ressource ciblée
       type : 'POST', // Le type de la requête HTTP.
       data : data_form,
       dataType : 'html', // On désire recevoir du HTML
       success : function(code_html, statut){ // code_html contient le HTML renvoyé
           console.log(data_form);
           console.log(code_html);
           console.log(statut);
       }
    });

});

 </script>
</body>

</html>