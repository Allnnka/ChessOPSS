<!DOCTYPE html>
<html lang="pl">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Gra</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>
	<script src="../scripts/gameVariables.js"></script>
	<script src="../scripts/gameFunctions.js"></script>
</head>

<body>
	<div id="content">
		<header>
			<?php
					include 'modules/header.php';
			?>
		</header>
		<main>
			<hr/>
			<script>
				var app = new PIXI.Application(xCanvasSize, yCanvasSize, { transparent: true });
				document.body.appendChild(app.view);
				var container = new PIXI.Container();
				app.stage.addChild(container);
				var square = new PIXI.Graphics();
				drawBoard();
				drawFigure(390, 150);

				//drawFigures();
			</script>
		</main>
	</div>
	<?php
			include 'modules/footer.php';
	?>
</body>

</html>