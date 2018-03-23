<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Logowanie</title>
	<script src="scripts/jquery-3.3.1.min.js"></script>
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
					<input type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" />
					<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" />
					<input type="password" placeholder="Powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło'" />
					<input type="submit" value="Zaloguj się" />
				</form>
			</article>
		</div>
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>