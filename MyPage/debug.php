<?php

try {
    $raw = file_get_contents('php://input');
    $data = json_decode($raw);
    echo json_encode($data);
} catch (Exception $e) {
    echo 0;
}