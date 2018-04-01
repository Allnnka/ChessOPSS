<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="scripts/validator.js"></script>
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
			<form method="post" action="register.php">
				<span class="popuptext" id="emailValidationPopup">Błędny adres email.</span>
				<input type="text" id="emailInput" placeholder="Adres email"/>
				<input type="password" id="passwordInput" placeholder="Hasło"/>
				<input type="password" id="repeatPasswordInput" placeholder="Powtórz hasło"/>
				<input type="submit" value="Zaloguj się" />
			</form>
		</div>
		<?php
			include_once 'modules/footer.php';
		?>
	</main>
</body>
</html>
