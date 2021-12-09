<?php
function getData($query, $dbname)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($query);
    $conn->close();
    return $result;
}

function printHead(){
   print file_get_contents("./templates/head.html");
}