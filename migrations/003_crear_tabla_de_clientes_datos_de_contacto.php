<?php

$sql="CREATE TABLE IF NOT EXISTS cliente_datos_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,  -- Relación con la tabla clientes

    -- Datos del contacto
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(150) NULL,
    cargo VARCHAR(120) NULL,
    departamento VARCHAR(120) NULL,
    telefono VARCHAR(30) NULL,
    movil VARCHAR(30) NULL,
    email VARCHAR(150) NULL,
    notas TEXT NULL,

    -- Control y estado
    fecha_alta DATE DEFAULT (CURRENT_DATE),
    estado_contacto ENUM('Activo', 'Inactivo', 'Principal') DEFAULT 'Activo',

    -- Auditoría
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    -- Relación con cliente
    CONSTRAINT fk_contacto_cliente
        FOREIGN KEY (cliente_id)
        REFERENCES clientes(id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

$db->exec($sql);

/*

  Una vez creado la tabla de clientes, tenemos que añadir el campo:
        cliente_id INT NOT NULL,
  con referencia a :
    CONSTRAINT fk_datos_admin_cliente
    ON UPDATE CASCADE ON DELETE CASCADE
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
*/

?>
