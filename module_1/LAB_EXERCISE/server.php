<?php
// server.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents("php://input");

    $received = json_decode($data, true);

    echo "Server received: " . $received['message'];
} else {
    echo "This server only accepts POST requests.";
}
