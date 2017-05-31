<div id="auswahl_content">

	<form action="index.php" method="post" enctype="multipart/form-data">
		
		<div id="glob_form">
			
			<select name="csv_auswahl">
				<?php
					foreach (glob("../csv/*.csv") as $filename) {
						$file = explode("/", $filename);
							
						echo "<option value='".$filename."'>".$file[2]."</option>";
					}
				?>
			</select>
		
			<button type="submit" name="dateisuchen_glob">Auswählen</button>
		
		</div>
		
		<div id="drop_form">
			
			<input type="file" id="dropbox" name="file">
			
			<button type="submit" name="dateisuchen_dropbox">Auswählen</button>
		
		</div>
	
	
	</form>


</div>