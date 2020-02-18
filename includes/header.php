<?php
	session_start();
	var_dump($_SESSION);
	/*$_SESSION['utilisateur'] = [
		'prenom' => 'Yohan',
		'nom' => 'Koroloff',
		'id' => 17,
	];*/
?>
<!DOCTYPE html>

<?php
	include('./traitement/changement_couleur.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titre; ?></title>
	<style>
		.erreur {
			color: #FF0000;
		}

		.sombre {
			color: #FFF;
			background-color: #000;
		}
	</style>
</head>

<body class="<?php echo $couleur; ?>">
	<header>
		<nav><?php require_once('./includes/nav.php'); ?>
		</nav>
	</header>