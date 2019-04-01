<?php
require_once("lib/Tinify/Exception.php");
require_once("lib/Tinify/ResultMeta.php");
require_once("lib/Tinify/Result.php");
require_once("lib/Tinify/Source.php");
require_once("lib/Tinify/Client.php");
require_once("lib/Tinify.php");

 \Tinify\setKey("htTJCG5ZZMV1rfH3FiZERjJmHtJFjJb7");
 
 // 31.03.19
 // API eQma: HR9S4Pf1UlS5fRgmHCR3eeLSmwSm1oou
 // API van4243: Kxme7b62CDNDbbXUmdEHE5qWKkDzAHXb
 // API sm1la: hwVl3wWrMAu8djgZjEuKyhuCnfzuEgZ9
 // API allcs: SCk5oLApML4IIEbpAbSQ2qnM9s62HHeZ
 // API gmail: 9FkrHuFDN12mhrs7HkFOQOWledCscyrx
 // API mailru: htTJCG5ZZMV1rfH3FiZERjJmHtJFjJb7
 
$pathImages = __DIR__ . "\images\*";

$filelist = glob($pathImages);

foreach ($filelist as $file){
	$fileName = basename($file);
	if (!file_exists("optim\\". $fileName)) {
		$source = \Tinify\fromFile($file);
		$source->toFile("optim\\". $fileName);
		echo $fileName . "<br>";
	}
}

?>