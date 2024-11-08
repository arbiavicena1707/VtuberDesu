<?php 
function tambahGambar($dest,array $pict){	 	
	if (!(file_exists("$dest/$pict")))
	{ 
		$uploaddir = "$dest/"; 
		$uploadfile = $uploaddir . basename($pict['name']);
		if (move_uploaded_file($pict['tmp_name'], $uploadfile)) 
		{
			return true;
		}
		else return false;
	}
	else return false;
}


?>
