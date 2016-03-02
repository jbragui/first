<!--Revisar esta pagina para hacer el procedimiento de clientes.php
	http://www.stewparkin.com/2009/03/apache-re-writes-in-htaccess/comment-page-1/#comment-36133
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php 
	// Get the username from the url
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$cadena.='	<head>
					    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
					    <title>Clientes | '.$id.'</title>
					    <style type="text/css"> .green { color: green; } </style>
					</head>
					<body>
					  <h1>Esta pag. muestra info de un cliente especifico</h1>
					  <p>Welcome: <span class="green">'.$id.'</span></p>
					</body>';
	}else{
		$cadena.='	<head>
					    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
					    <title>Listado de clientes</title>
					    <style type="text/css"> .green { color: green; } </style>
					</head>
					<body>
					  <h1>Listado de clientes</h1>
					  <a href="clientes/juan-1-cliente">Juan</a>
					  <a href="clientes/juan-2-cliente">Juan2</a>
					  <a href="clientes/juan-3-cliente">Juan3</a>
					  <a href="clientes/juan-4-cliente">Juan4</a>
					  <a href="clientes/juan-4-cliente">Juan5</a>
					  <a href="clientes/juan-4-cliente">Cliente 1 rama testeo_github</a>
					  <a href="clientes/juan-4-cliente">Cliente 2 rama testeo_github</a>
					  <a href="clientes/juan-4-cliente">Cliente 3 rama testeo_github</a>
					  <a href="clientes/juan-4-cliente">Cliente 4 rama testeo_github</a>
					</body>';
	}
	echo $cadena;
	/*Si existe el id en la URL entonces mediante un JS va a consultar si ese cliente existe en la BD. Si la rpta es
	afirmativa entonces me muestra el contenido html que se ve debajo de este mensaje. Si la rpta es negativa
	entonces me envía a la página custom_404.php. Si no existe el id en la URL entonces me envia a clientes.php donde
	habrá un listado de todos los clientes.*/
?>
</html>