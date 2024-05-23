<?php 

$discs_list = file_get_contents("dischi.json");

header("Content-Type: application/json");

echo $discs_list;

?>