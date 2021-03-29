<?php

	if(isset($_POST['scene_paths'])&&isset($_POST['script_name'])){
	
		$scene_paths_str =$_POST['scene_paths'];
		$scipt_name =$_POST['script_name'];
		
		$scene_paths_array = explode(",",$scene_paths_str);
		
		print_r($scene_paths_array);
		
		$program_path = '"C:\Program Files (x86)\Toon Boom Animation\Toon Boom Harmony 17 Premium\win64\bin\HarmonyPremium.exe"';
		
		
		foreach($scene_paths_array as $scene_path){
			

			$command_string = $program_path.' '.$scene_path.' -batch';
			
			echo $command_string;	
			
			$command = exec ($command_string);
			
			echo $command;		
			
		}

	}

//"C:\Program Files (x86)\Toon Boom Animation\Toon Boom Harmony 17 Premium\win64\bin\HarmonyPremium.exe"   P:\projects\billy\layout\harmony\ep101\ep101_pl005_animatic_v001\ep101_pl005_animatic_v001.xstage -batch -compile "P:\projects\billy\layout\harmony\add_dots.js"
//$command = exec ("D:/1_TRAVAIL/WEB/wamp64/www/SANDBOX/php_exec/bin/myscript.bat ".$scene_path);

?>
