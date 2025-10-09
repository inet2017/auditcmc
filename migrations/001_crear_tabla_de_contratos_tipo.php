<?php

$sql="CREATE TABLE IF NOT EXISTS contrato_tipos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        UNIQUE KEY (nombre)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$db->exec($sql);
?>