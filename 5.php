<!DOCTYPE html>
<html>
<head>
	<title> No.5 </title>
</head>
<body>

	

	<form action="" method="POST">
		Masukan bintang 
		<input type="text" name="bintang">
		<input type="submit" name="enter" value="GO">
	</form>
<right>
	<?php 

		if (isset($_POST["enter"])) {
			$nil = $_POST["bintang"];

			for ($i=1; $i<=$nil ; $i++) { 
				for($b = 1; $b <= $i; $b++){
					echo "*";
				}
				echo"<br>";
			}
		}

	 ?>
</span>
</body>
</html>