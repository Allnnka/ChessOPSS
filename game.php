<!DOCTYPE html>
<html lang="pl">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Gra</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>
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
				var app = new PIXI.Application();
				document.body.appendChild(app.view);
				var backgroundImage = PIXI.Texture.fromImage('../img/board.png')

				var tilingSprite = new PIXI.extras.TilingSprite(
					backgroundImage,
					800,
					600
				);
				app.stage.addChild(tilingSprite);


				/*
								var app = new PIXI.Application(1200, 800, {
									backgroundColor: 0x1099bb
								});
								document.body.appendChild(app.view);

				*/

				// create a new Sprite from an image path
				//var bunny = PIXI.Sprite.fromImage('../img/bunny.png')

				// center the sprite's anchor point
				//bunny.anchor.set(0.5);

				// move the sprite to the center of the screen
				//bunny.x = app.screen.width / 2;
				//bunny.y = app.screen.height / 2;

				//app.stage.addChild(bunny);

				// Listen for animate update
				/*app.ticker.add(function (delta) {
					// just for fun, let's rotate mr rabbit a little
					// delta is 1 if running at 100% performance
					// creates frame-independent transformation
					bunny.rotation += 0.1 * delta;
				});*/
			</script>
		</main>
	</div>
	<?php
			include 'modules/footer.php';
	?>
</body>

</html>