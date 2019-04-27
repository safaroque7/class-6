<!DOCTYPE html>
<html>
	<head>
		<title> class practice 1 </title>
	</head>
	<body>
		<?php
			class welcome
			{
				public function myname()
				{
					return 'S A Faroque';
				}
			}

			$name = new welcome;
			echo 'welcome '.$name->myname(); 
		?>
	</body>
</html>