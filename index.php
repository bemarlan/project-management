<?php
// db connect and error handling
require_once('db.php');

/*** build out site ***/
?>

<html>
	<head>
		<link rel="stylesheet" href="css/normalize.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<title>
			Project Management | Beverly Lanning
		</title>
	</head>
	<nav>
		<a class="visually-hidden" href="#Main">
			Skip to main content
		</a>
	</nav>
		<a name="Main"></a>
	<body>
		<div class="wrapper"><?php include 'templates/body.php'; ?></div>
	</body>
	<footer>
		<?php include 'templates/footer.php'; ?>
	</footer>
	</body>

</html>