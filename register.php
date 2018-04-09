<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="scripts/validator.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
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
			<form method="post" id="registerForm" action="models/registerUser.php" accept-charset='UTF-8'>
				<span class="popuptext" id="emailValidationPopup">Błędny adres email</span>
				<input type="text" name="emailInput" id="emailInput" placeholder="Adres email"/>
				<span class="popuptext" id="passwordValidationPopup">Błędne hasło</span>
				<input type="password" name="passwordInput" id="passwordInput" placeholder="Hasło"/>
				<span class="popuptext" id="passwordInputRepeat">Hasła nie są zgodne</span>
				<input type="password" name="repeatPasswordInput" id="repeatPasswordInput" placeholder="Powtórz hasło"/>
				<br/> <br/>
				<div class="g-recaptcha" data-sitekey="6Ldn1lEUAAAAANDFWX7IUuhIZdlTq_g75MmakEgW"></div>
				<input id="submitRegister" type="submit" value="Zarejestruj się"/>
			</form>
		</div>
		<?php
			include_once 'modules/footer.php';
		?>
	</main>
</body>
</html>
