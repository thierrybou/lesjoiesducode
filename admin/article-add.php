<?php
require_once 'partials/header.php';


// Récupérer les données du formulaire depuis le tableau $_POST
$name = !empty($_POST['name']) ? strip_tags($_POST['name']) : '';
$content = !empty($_POST['content']) ? strip_tags($_POST['content']) : '';
$creation_date = !empty($_POST['creation_date']) ? strip_tags($_POST['creation_date']) : '';

if (empty($creation_date) || strtotime($creation_date) === false) {
	$creation_date = date('Y-m-d H:i:s');
}

// Initialiser un tableau $errors et une chaine $result
$errors = array();
$result = '';

// Le formulaire a été soumis, l'utilisateur a appuyé sur Envoyer
if (!empty($_POST)) {

	// Vérifier que les champs obligatoires ne sont pas vides
	// Pour chaque erreur rencontrée, ajouter une entrée dans le tableau $errors correspondant au champ en erreur
	if (empty($name) || strlen($name) > 100) {
		$errors['name'] = 'Le nom est invalide (longueur max 100)';
	}
	if (empty($content) || strlen($content) < 20 || strlen($content) > 255) {
		$errors['content'] = 'Le contenu de la JDC est invalide (longueur min 20, longueur max 255)';
	}

	// S'il n'y a pas d'erreur on lance la requête d'insertion
	if (empty($errors)) {

		$query = $db->prepare('INSERT INTO articles SET name = :name, content = :content, creation_date = :creation_date');
		$query->bindValue(':name', $name, PDO::PARAM_STR);
		$query->bindValue(':content', $content, PDO::PARAM_STR);
		$query->bindValue(':creation_date', $creation_date, PDO::PARAM_STR);
		$query->execute();

		// On récupère l'identifiant unique automatiquement généré par la requête
		$insert_id = $db->lastInsertId();

		//Si la requête a réussie (c.f. lastInsertId()), on affiche une confirmation à l'utilisateur
		if (!empty($insert_id)) {
			$result .= '<div class="alert alert-success">Insertion réussie</div>';
			$result .= redirectJS('articles.php');
		} else {
			$result .= '<div class="alert alert-danger">Une erreur s\'est produite, merci de réessayer ultèrieurement</div>';
		}
	}
}

?>
	<h1>Ajouter un article</h1>
	<hr>

	<?php if (!empty($errors)) { ?>
	<div class="alert alert-danger">
		<ul>
		<?php
		foreach($errors as $error) {
			echo '<li>'.$error.'</li>';
		}
		?>
		</ul>
	</div>
	<?php } ?>

	<?php
	if (!empty($result)) {
		echo $result;
	} else {
	?>
	<form method="POST">
		<div class="form-group">
			<label for="name">Nom</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Auteur" value="<?= $name ?>">
		</div>

		<div class="form-group">
			<label for="content">Contenu</label>
			<textarea name="content" id="content" class="form-control" rows="5" placeholder="Contenu la JDC"><?= $content ?></textarea>
		</div>

		<div class="form-group">
			<label for="creation_date">Date</label>
			<input type="date" class="form-control" name="creation_date" id="creation_date" placeholder="Date de la JDC" value="<?= $creation_date ?>">
		</div>

		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
	<?php } ?>

<?php require_once 'partials/footer.php' ?>