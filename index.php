<?php

include_once "conexao.php";
header('Content-type:application/json;charset=utf-8');
$data = json_decode(file_get_contents('php://input'));

$sensorId = $data->{'sensorId'};
$prediction = $data->{'prediction'};
$date = $data->{'data'};

$sql = "INSERT INTO dados01(sensorId, prediction, data) VALUES($sensorId, $prediction, '$date')";
echo $sql;
$stmt = $con->query($sql);


echo json_encode(["sensorId" => $sensorId, "prediction"=> $prediction, "data" => $date ]);

?>

