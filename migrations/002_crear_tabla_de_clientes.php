<?php

$sql="CREATE TABLE IF NOT EXISTS clientes (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(200) NOT NULL,
        cif VARCHAR(20) NOT NULL,
        tipo_empresa ENUM('S.L.','S.A.','Autónomo','C.B.','Fundación','Asociación','Otro') NOT NULL DEFAULT 'S.L.',
        direccion VARCHAR(255) NULL,
        cp VARCHAR(10) NULL,
        poblacion VARCHAR(120) NULL,
        provincia VARCHAR(120) NULL,
        contrato_tipo_id INT NULL,
        logotipo VARCHAR(255) NULL, -- ruta del archivo subido
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT uq_clientes_cif UNIQUE (cif),
        CONSTRAINT fk_clientes_contrato_tipo
        FOREIGN KEY (contrato_tipo_id) REFERENCES contrato_tipos(id)
        ON UPDATE CASCADE ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$db->exec($sql);
?>