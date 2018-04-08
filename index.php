<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Strona główna</title>
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
		<div id="container">
			<article>
				<header>
					<h1> Zasay gry w szachy na 4 osoby </h1>
				</header>

				<?php
					require_once 'db/queries.php';
					//echo getUserIdByEmail("arkes987@gmail.com");

				?>

					<hr/>

					<img src="img/chess.png" />

					<p>
						Lorem ipsum dolor sit amet risus. Nunc tempor tristique, mauris nibh eu magna diam, suscipit in, odio. Class aptent taciti
						sociosqu ad litora torquent per inceptos hymenaeos. Fusce vel bibendum risus. Vivamus est tincidunt at, ornare dolor
						sit amet, euismod pulvinar, libero. Nulla lobortis semper. Praesent quis dui.
					</p>
					<p>
						N ornare arcu vitae imperdiet consequat. Cum sociis natoque penatibus et ultrices posuere eget, facilisis nec, pede. Suspendisse
						lectus orci, sodales quam purus, congue at, egestas non, leo. Mauris vehicula ut, urna. Nunc a mi. Sed in vestibulum
						tristique tempus dignissim. Phasellus vestibulum. Cras porta, erat volutpat. Praesent scelerisque rhoncus et, tristique
						mauris quis mauris. Nunc arcu sit amet lorem. Praesent euismod convallis non, quam.
					</p>
					<p>
						Vestibulum ante in massa. Curabitur non dui. Aliquam faucibus eros. Nullam ligula quis wisi. Suspendisse lectus blandit iaculis,
						diam id leo sodales pretium convallis. Praesent blandit tempus arcu. Donec nonummy at, ornare nisl, blandit risus commodo
						tincidunt lorem. Morbi dignissim, sapien vitae velit a dolor lorem, ornare euismod. Sed dignissim. Pellentesque eget
						ipsum dolor sapien auctor consectetuer. Curabitur vel massa. Nunc tristique purus. Aenean ac posuere cubilia.
					</p>
			</article>
		</div>
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>