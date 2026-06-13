<?php

$conn = mysqli_connect(
    "localhost:3307",  "root", "", "internship_26" );

header("Content-Type: application/json");

if (!$conn) {

    echo json_encode([
        "status" => false,
        "message" => "Database Connection Failed"
    ]);

    exit;
}

?>