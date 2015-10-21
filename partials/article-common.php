		<?php
		// Si la variable $max_length est définie, on prend sa valeur sinon on met la valeur 0
		$max_length = isset($max_length) ? $max_length : 100;
		?>

		<div class="post">
<<<<<<< HEAD
		    <p><?= date('d-m-Y', strtotime($article['creation_date'])) ?> par <a href="search.php?search=<?= $article['name'] ?>"><?= ucfirst($article['name']) ?></a></p>

		    <blockquote>
		      <p><?= nl2br(cutString($article['content'], $max_length, ' [...]')) ?></p>
=======
		    <p><?= $article['creation_date'] ?> par <a href="search.php?search=<?= $article['name'] ?>"><?= $article['name'] ?></a></p>

		    <blockquote>
		      <p><?= cutString($article['content'], $max_length, ' [...]') ?></p>
>>>>>>> v1
		    </blockquote>

		    <a href="article.php?id=<?= $article['id'] ?>" class="btn btn-default">Lire la suite</a>
		</div>

		<hr>