<?php

$sql="CREATE TABLE IF NOT EXISTS contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    cargo VARCHAR(120) NULL,
    email VARCHAR(150) NULL,
    telefono VARCHAR(30) NULL,
    notas TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_contactos_cliente (cliente_id),
    CONSTRAINT fk_contactos_cliente
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
    ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$db->exec($sql);

?>