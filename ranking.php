<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Ranking</title>
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
			<div id="container">
				<article>
						<header>
							<h1>Ranking graczy</h1>
						</header>
						<hr/>
						<?php
							require_once 'db/queries.php';
							$data = getUserRankTable();
							echo "<div class='scoreTable'><table><tr><th>ID</th><th>Email</th><th>Score</th><th>Win Games</th></tr>";
							while($row = $data->fetch_assoc()) {
								echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["score"]."</td><td>".$row["win_games"]."</td></tr>";
							}
							echo "</table></div>";
						?>
				</article>
			<div>
		</main>
	</div>
	<?php
		include 'modules/footer.php';
	?>
</body>
</html>