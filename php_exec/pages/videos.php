
<?php
	
	$dir = "D:/1_TRAVAIL/WIP/OOOLALA/SCENES/";
	
	$scenes_tag = array();

	$scenes = scandir ( $dir, SCANDIR_SORT_ASCENDING);

	foreach($scenes  as $scn){
		
		if($scn!="."&&$scn!=".."){
			
			$video_path = $dir.$scn.'/frames/video.mp4'
			
	?>
		<video controls width="250">
			<source src="<?php echo $video_path;?>"
					type="video/webm">
			<source src="<?php echo $video_path;?>"
					type="video/mp4">
					
					Sorry, your browser doesn't support embedded videos.
		</video>
		
<?php } 

	}


?>
