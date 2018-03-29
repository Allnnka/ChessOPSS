<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="styles/style.css" />
	<title>Ranking</title>
	<script src="scripts/jquery-3.3.1.min.js"></script>
	<script src="scripts/validate.js"></script>
	<script src="scripts/angular.min.js"></script>
</head>

<body ng-app="app">
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
			<div class="rank">
				<h2>Ranking graczy</h2>
				<table ng-controller="controller" border="1">
					<tr ng-repeat="x in records">
						<td>{{x.Name}}</td>
						<td>{{x.Country}}</td>  
					</tr>
				</table>

			</div
	</main>
	<?php
		include 'modules/footer.php';
	?>
</body>
</html>

<script>
var app = angular.module("app", []);
app.controller("controller", function($scope) {
	$scope.records = [
       {
            "Name" : "Alfreds Futterkiste",
            "Country" : "Germany"
        },{
            "Name" : "Berglunds snabbköp",
            "Country" : "Sweden"
        },{
            "Name" : "Centro comercial Moctezuma",
            "Country" : "Mexico"
        },{
            "Name" : "Ernst Handel",
            "Country" : "Austria"
        }
    ]
});
</script>