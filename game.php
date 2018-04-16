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

				var app = new PIXI.Application(1200, 750, { transparent: true });
				document.body.appendChild(app.view);
				var container = new PIXI.Container();

				app.stage.addChild(container);

				var xDimensionSize = 8;
				var yDimensionSize = 8;
				var xStartPos = 180;
				var yStartPos = -60;
				var initWithWhiteSquare = true;

				var square = new PIXI.Graphics();

				for(var x = 1; x <= xDimensionSize; x++){
					
					for(var y = 1; y <= yDimensionSize; y++){

						if(initWithWhiteSquare){
							square.beginFill(0xffffee);
							initWithWhiteSquare = false;
						}
						else{
							square.beginFill(0x000000);
							initWithWhiteSquare = true;
						}
						square.lineStyle(2, 0xcccccc);
						square.drawRect((x * 86) + xStartPos, (y * 86) + yStartPos, 86, 86);
						container.addChild(square);
					}
					
					initWithWhiteSquare = !initWithWhiteSquare;


				}
			</script>
		</main>
	</div>
	<?php
			include 'modules/footer.php';
	?>
</body>

</html>