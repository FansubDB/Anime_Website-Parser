<?php

include("HtmlDomParser.php");

$dom = HtmlDomParser::file_get_html('livechart.html');

foreach ($dom->find('h3') as $h) {
	echo $h->innertext;
	echo '<br>';
}
?>
