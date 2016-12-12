<?php

include("HtmlDomParser.php");

$dom = HtmlDomParser::file_get_html('livechart.html');

foreach ($dom->find('h3') as $h) {
	echo '{';
	echo '"name": "' . $h->innertext . '",';
	echo '"image": "",';
	echo '"group": []';
	echo '},';
	echo '<br>';
}
?>
