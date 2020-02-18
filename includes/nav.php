<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a></li>
	<li>
		<?php
			if (isset($_SESSION['utilisateur'])) {
			echo "Bienvenue ".$_SESSION['utilisateur']['prenom']." ".$_SESSION['utilisateur']['nom'];
			}
			else {
				echo "<a href='./connexion.php'>Se connecter</a>";
			}
		?>
	</li>
</ul>