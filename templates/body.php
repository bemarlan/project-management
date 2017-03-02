<?php

	if (isset($_GET['page']) && ($_GET['page']) != ''){

		$page = (substr(($_GET['page']), 0, 4) == "edit" ? 'edit' : ($_GET['page']));

		switch ($page) {
			/*case 'about':
				include 'about.php';				
				break;
			case 'songs':
				include 'songs.php';
				break;
			case 'edit':
				include 'backoffice/edit.php';
				break;*/
			default:
				echo '404 - Sorry you\'re lost! Try pressing the Back button or using the site navigation.';
				break;
		}
	} else {
		include 'home.php';
	}

?>