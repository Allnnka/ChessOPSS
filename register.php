<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
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
					<input type="text" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'" />
					<input type="text" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'" />
					<input type="password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'" />
					<input type="password" placeholder="Powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło'"/>
					<input type="reset" value="Wyczyść" />
					<input type="submit" value="Zarejestruj się" />

				</form>
			</article>
		</div>
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>