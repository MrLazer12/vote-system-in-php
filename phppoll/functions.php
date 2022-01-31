<?php
//======= BD_ACTIONS ========================================================================
//===========================================================================================
$hostname = "localhost";
$username = "root";
$password = "";
$database = "phppoll";
$conection = mysqli_connect($hostname, $username, $password) 
			 or die ("Nu mă pot conecta la baza de date");
mysqli_select_db($conection, $database) or die ("Nu găsesc baza de date");		


function close_db($conection)
{
	mysqli_close($conection);
}

function change_location($location){
	header("Location: ".$location);
}
//======= TEMPLATES =========================================================================
//===========================================================================================
function template_header($title) {
echo <<<EOT
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>$title</title>
			<link href="css/main.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		</head>
		<body>
	    <nav>
	    	<div class="content_to_center">
	    		<h1>Voting & Poll System</h1>
	        	<a href="index.php"><i class="fas fa-poll-h"></i>Polls</a>
	        </div>
	    </nav>
EOT;
}

function template_footer() {
echo <<<EOT
	    </body>
	</html>
EOT;
}