<?php
require_once "getdata.php";
print json_encode($_POST);

$sql = "UPDATE images set img_filename='" . $_POST["inputFileName"] . "', img_title = '"
        . $_POST["inputTitle"]
        . "', img_width = " . $_POST["inputWidth"] . ", img_height= " . $_POST["inputHeight"] .
        " WHERE img_id = " . $_POST["id"];

print $sql;
getData($sql, "steden");


?>
