<?php
	
	$dir = "D:/1_TRAVAIL/WIP/OOOLALA/SCRIPTS/";

	$scripts = scandir ( $dir, SCANDIR_SORT_ASCENDING);
	


?>

<input type="text" id="input_script" name="input_script" />
<select name="script_list" onChange="combo(this, 'input_script')">

	<?php foreach($scripts  as $src){
		
		if($src!="."&& $src!=".."){
			
			$script_path = $dir.'/'.$src;

			?>
			<option><?php echo $script_path; ?></option>
		<?php			
		}

	}

?>
</select> 

