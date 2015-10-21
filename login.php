<?php require_once 'partials/header.php' ?>

		<h1>Connexion</h1>
		<hr>

		<div class="card card-container">

			<form class="form-login" novalidate>

				<input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
				<br>
				<input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>

				<div id="remember" class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Se souvenir de moi
					</label>
				</div>

				<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>

			</form><!-- /form -->

			<a href="#" class="forgot-password">
				Mot de passe oublié ?
			</a>
		</div><!-- /card-container -->


<?php require_once 'partials/footer.php' ?>