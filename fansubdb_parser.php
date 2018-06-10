<?php

include("HtmlDomParser.php");

$dom = HtmlDomParser::file_get_html('fansubdb.html');

$row_count=0;
$json = array();
foreach ($dom->find('tr') as $row) {
        $title = $row->find('td', 1)->innertext;
        $groups = $row->find('td', 4)->innertext;
		$a_groups = explode(', ', $groups);
		echo '{
      "name": "' . $title . '",
      "image": "",
      "groups": [';
	  foreach ($a_groups as $g){
		  echo '{
			  "status": "release",
			   "detail":
			  [
            {
              "name": "' . $g . '"
            }
          ]
		  },';
	  }
		echo "]},";
       	echo '<br>';
    }
?>
