<?php
	$titre = 'Se connecter';
	require_once('./includes/header.php');
	require_once('./traitement/traitement_contact.php');
	if (!empty($_POST)) {
		// On récupère le tableau renvoyé par notre fonction traitementFormulaire dans la variable $traitement.
		$traitement = traitementFormulaire($_POST);
	}
?>
	<form action="#" method="POST">
		<div>
			<label>Nom :</label>
			<input type="text" name="nom" id="nom">
			<p>
				<?php
				if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['nom'])) {
					echo $traitement['erreurs']['nom'];
				}
				?>
			</p>
		</div>
		<div>
			<label>Prénom :</label>
			<input type="text" name="prenom" id="prenom">
			<p>
				<?php
				if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs']['prenom'])) {
					echo $traitement['erreurs']['prenom'];
				}
				?>
			</p>
		</div>
		<div>
			<?php
				if (!empty($_POST['prenom']) && !empty($_POST['nom'])) {
					$_SESSION['utilisateur']['prenom'] = $_POST['prenom'];
					$_SESSION['utilisateur']['nom'] = $_POST['nom'];
					echo "<a href='index.php'><button>Se connecter</button></a>";
				}
				else {
					echo "<button>Se connecter</button>";
				}
			?>
		</div>
	</form>
<?php
	require_once('./includes/footer.php');
?>