
<?php

header('Access-Control-Allow-Origin: *');

header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli('sql113.epizy.com', 'epiz_30617136', 'k91a2AjJILG5v','epiz_30617136_timepasscoders1');

$result = $conn->query("SELECT name,user_id,password FROM private_details");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"user_id":"'   . $rs["user_id"]        . '",';

    $outp .= '"password":"'   . $rs["password"]        .'"}';
}
$outp .="]";

$conn->close();

echo($outp);
return $outp;

?>

