<?php
	
	$dir = "D:/1_TRAVAIL/WIP/OOOLALA/SCENES/";
	
	$scenes_tag = array();

	$scenes = scandir ( $dir, SCANDIR_SORT_ASCENDING);

	foreach($scenes  as $scn){
		
		if($scn!="."&&$scn!=".."){
			
			$scene_path = $dir.$scn.'/'.$scn.'.xstage';
			
			$str = '<br> <input class="scene_row" type="checkbox" id="'.$scn.'" name="'.$scene_path.'">';
			$str .= ' <label for="'.$scn.'">'.$scn.'</label>';	
			array_push($scenes_tag,$str );		
			echo $str;		
			
					
		}

	}

//
?>
