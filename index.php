<?php
/*  $xml = simplexml_load_file("example.xml");*/
$doc = new DOMDocument();

$string =$doc->load('example.xml');
$Placemarks = $doc->getElementsByTagName("producer");

foreach( $Placemarks as $value )
{
	$names = $value->getElementsByTagName("name");
	echo $name = $names->item(0)->nodeValue.'<br>';

	// like name we also print age and other tags

}

?>
