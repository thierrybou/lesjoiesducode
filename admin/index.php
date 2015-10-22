<?php include_once 'partials/header.php';

$query = $db->query('SELECT * FROM articles');
$countArticles= $query->rowCount();

$query = $db->query('SELECT * FROM user');
$countUsers= $query->rowCount();

$query = $db->query('SELECT * FROM articles ORDER BY creation_date DESC LIMIT 5');
$lastArticles = $query->fetchAll();

$query = $db->query('SELECT * FROM user ORDER BY creation_date DESC LIMIT 5');
$lastUsers = $query->fetchAll();

?>


			<div id="main-container" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Tableau de bord</h1>

				<div class="row placeholders">
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/sky/text:4321 \n JDC" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Nombre de JDC</h4>
						<span class="text-muted"><?= "$countArticles" ?></span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/vine/text:15 \n inscriptions" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Nombre d'inscriptions</h4>
						<span class="text-muted"><?= "$countUsers" ?></span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/social/text:42 \n commentaires" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Nombre de commentaires</h4>
						<span class="text-muted">42</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/#5bc0de:#fff/text:18 \n messages" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Nombre de messages</h4>
						<span class="text-muted">18</span>
					</div>
				</div>

				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Dernières JDC</h3>
					</div>

					<div class="list-group">

						<?php foreach ($lastArticles as $article) { ?>
							<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading"><?= $article['name'].' ('.date('d/m/Y', strtotime($article['creation_date'])).')' ?></h4>
							<p class="list-group-item-text"><?= $article['content'] ?></p>
							</a>
						<?php } ?>

					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Dernières inscriptions</h3>
					</div>
					<div class="list-group">

						<?php foreach ($lastUsers as $user) { ?>
							<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading"><?= $user['firstname'].' '.$user['lastname'].' ('.date('d/m/Y', strtotime($user['creation_date'])).')' ?></h4>
							<p class="list-group-item-text"><?= 'sexe : '.$user['gender'].', email : '.$user['email'].', newsletter : '.$user['newsletter']=1?'oui':'non' ?></p>
							</a>
						<?php } ?>

					</div>
				</div>

			</div>

	<?php include_once 'partials/footer.php'; ?>