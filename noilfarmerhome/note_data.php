
<?php

header('Access-Control-Allow-Origin: *');

header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli('sql113.epizy.com', 'epiz_30617136', 'k91a2AjJILG5v','epiz_30617136_timepasscoders1');

$result = $conn->query("SELECT note FROM gov_note");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"note":"'  . $rs["note"] .'"}';
}
$outp .="]";

$conn->close();

echo($outp);
return $outp;

?>

