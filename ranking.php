<!DOCTYPE html>
<html lang="pl">

<head>
	<link rel="shortcut icon"  type="image/x-icon" href="img/favicon.ico"/>
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
							<h1 class="headerText">Ranking graczy</h1>
						</header>
						<hr/>


						
						<?php
						
							require_once 'db/queries.php';
							$data = getUserRankTable();
							//echo "<div class='scoreTable'><table><tr><th>ID</th><th>Email</th><th>Score</th><th>Win Games</th></tr>";
							echo '<table class="ranking container">
							<thead>
								<tr>
									<th><h1>Position</h1></th>
									<th><h1>User Name</h1></th>
									<th><h1>Score</h1></th>
									<th><h1>Win Games</h1></th>
								</tr>';
							echo "</thead><tbody>";
							while($row = $data->fetch_assoc()) {
								echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["score"]."</td><td>".$row["win_games"]."</td></tr>";
							}
							echo "</tbody></table>";
							
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