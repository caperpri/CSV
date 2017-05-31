<?php

if (isset ($_POST["dateisuchen_glob"]) ) {

	$path = $_POST["csv_auswahl"];
	echo $path;
	
	$_SESSION["datei"] = $path;
}

if (isset ($_POST["dateisuchen_dropbox"]) ) {

	$target_dir = "../csv/";
	$file = $_FILES['file']['name'];
	$file_type = pathinfo($file, PATHINFO_EXTENSION);
	
	if ($file_type == "csv" && file_exists($target_dir.$file)) {
		echo "Die Datei existiert bereits.";
		
		
		$path = $target_dir.$file;
		$_SESSION["datei"] = $path;
	
	} else 
	if ($file_type == "csv") {
		
			$path = $target_dir.$file;
			$tmp = $_FILES["file"]['tmp_name'];
			move_uploaded_file($tmp,$path) ;
			$_SESSION["datei"] = $path;
			
		echo "Die Datei wurde gespeichert und ausgewählt";
		
	}	else {
		echo $file;
	}
	
	

}




?>