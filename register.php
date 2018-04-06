<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="scripts/validator.js"></script>
<<<<<<< HEAD
	<script type="text/javascript" src="scripts/validatorRules.js"></script>
=======
>>>>>>> fde13db316016ec99ee64a4042a6bb7748063751
	<title>Rejestracja</title>
</head>

<body>
	<header>
			<?php
				include_once 'modules/header.php';
			?>
			<nav id="topnav">
			<?php
				include_once 'modules/menu.php';
			?>
			</nav>
	</header>
	<main>
		<div class="register">
			<form method="post" action="models/registerUser.php">
				<span class="popuptext" id="emailValidationPopup">Błędny adres email</span>
				<input type="text" id="emailInput" placeholder="Adres email"/>
				<span class="popuptext" id="passwordValidationPopup">Błędne hasło</span>
				<input type="password" id="passwordInput" placeholder="Hasło"/>
				<span class="popuptext" id="repet">Hasła nie są zgodne</span>
				<input type="password" id="repeatPasswordInput" placeholder="Powtórz hasło"/>
				<input type="submit" value="Zarejestruj się" />
			</form>
		</div>
		<?php
			include_once 'modules/footer.php';
		?>
	</main>
</body>
</html>
