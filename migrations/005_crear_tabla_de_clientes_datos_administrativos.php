<?php

$sql="CREATE TABLE IF NOT EXISTS cliente_datos_administrativos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        cliente_id INT NOT NULL,
        comercial_asignado VARCHAR(150) NULL,
        codigo_interno VARCHAR(100) NULL,
        fecha_ultima_interaccion DATE NULL,
        fecha_renovacion DATE NULL,
        nivel_prioridad ENUM('Baja','Media','Alta','Crítica') DEFAULT 'Media',
        sla VARCHAR(100) NULL,
        documentacion_adjunta VARCHAR(255) NULL,
        consentimiento_rgpd TINYINT(1) NOT NULL DEFAULT 0,
        comentarios_internos TEXT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT fk_datos_admin_cliente
        FOREIGN KEY (cliente_id) REFERENCES clientes(id)
        ON UPDATE CASCADE ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

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

