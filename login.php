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
			<div id="login">
					<form>
						<input type="email" name="email" placeholder="email" minlength="5" required onfocus="this.placeholder=''" onblur="this.placeholder='login'" />	
						<input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" />
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