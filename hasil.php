<?php

$q = $_POST['cari'];

$key = 'YOUR_API_KEY';

$jsonData = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&q=$q&key=$key");
$results = json_decode($jsonData, TRUE);

// echo "<pre>";
// print_r($results);
// echo "</pre>";

// echo $results['items']['totalResults'];

for($i=0; $i < count($results['items']); $i++) {
	$videoId = $results['items'][$i]['id']['videoId'];
	$title = $results['items'][$i]['snippet']['title'];
	echo '
	<form action="unduh.php" method="POST">
	<input type="hidden" name="videoId" value="'.$videoId.'">
	<input type="text" name="title" value="'.$title.'">
	<input type="submit" name="submit" value="Unduh">
	</form>
	';
}

// echo count($results['items']);

?>