<?php
    $Telephone = $_GET['Telephone'];
    $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = " SELECT * FROM users WHERE Telephone = ?"; 
    $st = $conn->prepare($sql);
    $st->execute([$Telephone]);
    $count = $st->rowCount();
    echo json_encode(['count' => $count]);
    
?>