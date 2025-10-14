<?php

$sql="CREATE TABLE IF NOT EXISTS clientes (
        id INT AUTO_INCREMENT PRIMARY KEY,

        -- Datos generales
        nombre VARCHAR(200) NOT NULL,
        razon_social VARCHAR(200) NULL,
        cif VARCHAR(20) NOT NULL UNIQUE,
        tipo_empresa ENUM('S.L.', 'S.A.', 'Autónomo', 'C.B.', 'Fundación', 'Asociación', 'Otro') DEFAULT 'S.L.',
        actividad VARCHAR(150) NULL,
        direccion VARCHAR(255) NULL,
        codigo_postal VARCHAR(10) NULL,
        poblacion VARCHAR(120) NULL,
        provincia VARCHAR(120) NULL,
        pais VARCHAR(100) DEFAULT 'España',

        -- Datos de contacto
        telefono_principal VARCHAR(30) NULL,
        telefono_secundario VARCHAR(30) NULL,
        email VARCHAR(150) NULL,
        sitio_web VARCHAR(255) NULL,
        logotipo VARCHAR(255) NULL,

        -- Contrato (relación con contrato_tipos)
        tipo_contrato_id INT NULL,
        numero_contrato VARCHAR(100) NULL,
        fecha_alta DATE DEFAULT (CURRENT_DATE),
        estado_cliente ENUM('Activo', 'Inactivo', 'Potencial', 'Bloqueado') DEFAULT 'Activo',

        -- Observaciones
        observaciones TEXT NULL,

        -- Auditoría
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

        -- Relaciones
        CONSTRAINT fk_clientes_contrato_tipo
                FOREIGN KEY (tipo_contrato_id)
                REFERENCES contrato_tipos(id)
                ON UPDATE CASCADE
                ON DELETE SET NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

$db->exec($sql);
?>