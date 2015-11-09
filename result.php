<?php

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR.'/lib/WideImage.php';



function random_string() {

	$key = '';

	$keys = array_merge(range(0, 9), range('a', 'z'));

	for ($i = 0; $i < 10; $i++) {

		$key .= $keys[array_rand($keys)];

	}

	return $key;

}

$allowed =  array('gif','png' ,'jpg','bmp');
$filename = $_FILES['foto']['name'];
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
if(!in_array($ext,$allowed) ) {
	echo 'ERROR';
} else {


	$img = WideImage::load('foto')->resize(480, 480, 'outside');

	$badge = WideImage::load('badge.png');

	$new = $img->merge($badge, '50% – 25', '100% – 40', 50);

	$new = $img->merge($badge, 'center', 'bottom – 10', 100);

	$filename = random_string().'.png';

	$new->saveToFile("foto_merged/".$filename);

	$html = "<img height='200px' src='foto_merged/".$filename."'/><br><center><a href=\"foto_merged/$filename\">DOWNLOAD</a></center>";

	echo $html;
}

?>
