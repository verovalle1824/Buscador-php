<?php include 'consulta.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Búsqueda en tabla MySQL</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<h1>Búsqueda en tabla MySQL</h1>
	<form action="consulta.php" method="GET">
		<input type="text" name="buscar" placeholder="Buscar...">
		<button type="submit">Buscar</button>
	</form>
</body>
</html>
