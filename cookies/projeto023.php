<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<title>Cookies</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			setcookie("afiliado","5323", (time() + (3 * 24 * 3600)));
			
			$afiliado = $_COOKIE["afiliado"];
			
			echo "Número do afiliado: $afiliado";
		?>
	</body>
</html>