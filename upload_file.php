<!DOCTYPE html>
	<html>
	<head>
		<title> upload file </title>
	</head>
	<body>
	
		<?php
			if(isset($_POST['submit']))
			{
				move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name']);
			}
		?>


		<form action="" method="POST">
			<input type="file" name="image"> <br><br>
			<input type="submit" name="submit" value="upload">	
		</form>
	</body>
</html>		