<?php
	$str = file_get_contents('data/projects-test.json');
	$json = json_decode($str, true); // decode the JSON into an associative array

   echo '<pre>' . print_r($json, true) . '</pre>';

   echo '<pre>' . $json['project'][0]['name'] . '</pre>';

?>

<h3>Upcoming tasks</h3>

<div class="box-soft mb-075">
	<div class="pb-025 bold">Lorem ipsum dolor</div>
	<p class="pb-05 light">Lorem ipsum dolor</p>
	<p>Sed ea odio mandamus. Eum et torquatos vituperata, mel ut officiis scriptorem. Sea et idque vitae, ex vel dictas iriure reprimique.</p>
</div>