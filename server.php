<?php
$string = file_get_contents('data/to_do.json');

$array = json_decode($string, true);

if(isset($_POST['todoItem'])){
    array_push($array, $_POST['todoItem']);
    $arrayEncode = json_encode($array);
    file_put_contents('data/to_do.json', $arrayEncode);
}

if(isset($_POST['remove'])){
    array_splice($array, $_POST['remove'], 1);
    $arrayEncode = json_encode($array);
    file_put_contents('data/to_do.json', $arrayEncode);
}

if(isset($_POST['change'])){
    $array[$_POST['change']]['done'] = !$array[$_POST['change']]['done'];
    $arrayEncode = json_encode($array);
    file_put_contents('data/to_do.json', $arrayEncode);
}

header('Content-Type: application/json');
echo json_encode($array);
?>