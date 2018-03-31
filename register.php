<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script src="scripts/validate.js"></script> 	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
				<form method="post" id="rejestracja" action="register.php">
					<input type="email" name="email" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='login'" />
					<input type="password" id="password" name="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" />
					<input type="password" name="confirmPassword" placeholder="Powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło'" />
					<input type="submit" value="Zaloguj się" />
				</form>
		</article>
		</div>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>