<?php
header('Content-type: application/json');

$html = file_get_contents('https://teamtrees.org/');
$re = array();
preg_match('/<div id="totalTrees" class="counter" data-count="([0-9]+)">/i', $html, $re);

$array = [
  "trees" => $re[1]
];

echo json_encode($array);
?>