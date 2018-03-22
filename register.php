<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" />
	<title>Rejestracja</title>
</head>

<body>
	<header>
		<h1 id="logo">
			<img src="img/horse.png" /> SZACHY ONLINE
			<img src="img/horse.png" />
		</h1>
		<nav id="topnav">
			<ul class="menu">
				<li>
					<a href="index.php">Strona główna</a>
				</li>
				<li>
					<a href="ranking.php">Ranking</a>
				</li>
				<li>
					<a href="game.php">Rozgrywka</a>
				</li>
				<li>
					<a href="login.php">Logowanie</a>
				</li>
				<li>
					<a href="register.php">Rejestracja</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div id="logowanie">
			<article>
				<form>
					<input type="text" placeholder="Login" onfocus="this.placeholder=''" onblur="this.placeholder='Login'" />
					<input type="text" placeholder="E-mail" onfocus="this.placeholder=''" onblur="this.placeholder='E-mail'" />
					<input type="password" placeholder="Hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'" />
					<input type="password" placeholder="Powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='Powtórz hasło'"
					/>

					<input type="reset" value="Wyczyść" />
					<input type="submit" value="Zarejestruj się" />

				</form>
			</article>
		</div>
	</main>
	<footer>
		Wszelkie prawa zastrzeżone &copy;
	</footer>
</body>

</html>