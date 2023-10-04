<?php
$string = file_get_contents("./data/dischi_json.json");
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

header('Content-Type: application/json');
echo json_encode($result);





?>