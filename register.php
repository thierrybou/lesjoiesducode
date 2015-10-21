<?php require_once 'partials/header.php' ?>

		<h1>Inscription</h1>
		<hr>

		<div class="card card-container">

			<form class="form-register" novalidate>

				<div class="form-group">
					<label for="firstname">Prénom</label>
					<input type="text" class="form-control" id="firstname" placeholder="Votre prénom" autofocus>
				</div>

				<div class="form-group">
					<label for="name">Nom</label>
					<input type="text" class="form-control" id="name" placeholder="Votre nom">
				</div>

				<div class="form-group">
					<label for="gender">Sexe</label>
					<br>
					<label class="radio-inline">
						<input type="radio" name="gender" id="gender_male" value="1"> Homme
					</label>
					<label class="radio-inline">
						<input type="radio" name="gender" id="gender_female" value="2"> Femme
					</label>
				</div>

				<div class="form-group">
					<label for="email">Adresse email</label>
					<input type="email" class="form-control" id="email" placeholder="Un email valide">
				</div>

				<div class="form-group">
					<label for="password">Mot de passe</label>
					<input type="password" id="password" name="password" class="form-control" placeholder="Un mot de passe de 6 caractères minimum">
				</div>

				<div class="form-group">
					<label for="password">Confirmation du mot de passe</label>
					<input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Répétez votre mot de passe">
				</div>

				<div class="checkbox">
					<label>
						<input name="newsletter" id="newsletter" type="checkbox" value="1"> Inscription à la newsletter
					</label>
				</div>

				<div class="checkbox">
					<label>
						<input name="cgu" id="cgu" type="checkbox" value="1"> Accepter les CGU
					</label>
				</div>
				<br>

				<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Inscription</button>

			</form><!-- /form -->

		</div><!-- /card-container -->

<?php require_once 'partials/footer.php' ?>