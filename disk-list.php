<?php
$string = file_get_contents("..data/dischi.json");
$diskList = json_decode($string, true);
$result = [];

if (isset($_GET['index'])) {
    $diskIndex = $_GET['index'];
    $disk = $diskList[$diskIndex];
    $result = $disk;
}
else {
    $result = $diskList;
}







?>