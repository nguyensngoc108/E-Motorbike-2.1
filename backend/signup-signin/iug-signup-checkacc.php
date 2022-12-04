<?php
    $Account = $_GET['Account'];
    $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " SELECT * FROM users WHERE Account = ?"; 
    $st = $conn->prepare($sql);
    $st->execute([$Account]);
    $count = $st->rowCount();
    echo json_encode(['count' => $count]);
?>