<?php
header('Content-type: application/json');

$html = file_get_contents('https://teamtrees.org/');
echo $html;
preg_match('/<div id="totalTrees" class="counter" data-count="([0-9]+)">/gm', $html, $re);

$array = [
  "trees" => $re[1]
];

echo json_encode($array);
?>