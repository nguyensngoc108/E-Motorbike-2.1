<?php
    $Email = $_GET['Email'];
    $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " SELECT * FROM users WHERE Email = ?"; 
    $st = $conn->prepare($sql);
    $st->execute([$Email]);
    $count = $st->rowCount();
    echo json_encode(['count' => $count]);
?>