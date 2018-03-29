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
		<form id="logowanie" method="post" action="">
				<div>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email"></input>
					<span class="komunikat"></span>
				</div>
				<div>
					<label for="haslo">Haslo:</label>
					<input type="password" id="haslo" name="haslo"></input>
					<span class="komunikat"></span>
				</div>
				<div id="submit">
					<button type="submit">Wyslij</button>
				</div>
		</form>
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>