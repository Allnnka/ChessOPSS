<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script src="scripts/validate.js"></script>
	<title>Rejestracja</title>
</head>

<body>
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
		<div id="logowanie">
			<article>
				<form>
					<input type="email" id="form_username" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'" /><span class="error_form" id="email_error_message">Test</span>
					<input type="password"  id="form_password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'" />
					<input type="password" id="form_retype_password_" placeholder="Powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło'"/>
					<input type="submit"  id="form_submit" value="Zarejestruj się" />
				</form>
			</article>
		</div>
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>