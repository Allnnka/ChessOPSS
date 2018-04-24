<!DOCTYPE html>
<html lang="pl">

<head>
	<link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico"/>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Logowanie</title>
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="scripts/validator.js"></script>
</head>

<body>
 	<div id="content">
		<header>
			<?php
					include 'modules/header.php';
			?>
			<nav id="topnav">
				<?php
					include 'modules/menu.php';
				?>
			</nav>
		</header>
		<main>
		<div class="register">
					<form method="post" id="registerForm" accept-charset='UTF-8'>
					<span class="popuptext" id="emailValidationPopup">Niepoprawny email</span>
					<input type="text" name="emailInput" id="emailInput" placeholder="Adres email"/>
					<span class="popuptext" id="passwordValidationPopup">Podano złe hasło </span>
					<input type="password" name="passwordInput" id="passwordInput" placeholder="Hasło"/>
					<input type="submit" value="Zaloguj się" />
					</form>
			</div>
		</main>
	</div>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>