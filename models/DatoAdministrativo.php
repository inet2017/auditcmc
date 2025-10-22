<?php
// /models/DatoAdministrativo.php
require_once '../config/database.php';

class DatoAdministrativo {
    private PDO $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    /** Listar registros (opcionalmente filtrado por cliente) */
    public function listar(?int $cliente_id = null): array {
        if ($cliente_id) {
            $stmt = $this->db->prepare('SELECT * FROM cliente_datos_administrativos WHERE cliente_id = ? ORDER BY updated_at DESC');
            $stmt->execute([$cliente_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $stmt = $this->db->query('SELECT * FROM cliente_datos_administrativos ORDER BY updated_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** Obtener un registro por ID */
    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare('SELECT * FROM cliente_datos_administrativos WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    /** Crear registro */
    public function crear(array $d): void {
        $stmt = $this->db->prepare('
            INSERT INTO cliente_datos_administrativos
            (cliente_id, comercial_asignado, codigo_interno, fecha_ultima_interaccion, fecha_renovacion,
             nivel_prioridad, sla, documentacion_adjunta, consentimiento_rgpd, comentarios_internos)
            VALUES (?,?,?,?,?,?,?,?,?,?)
        ');
        $stmt->execute([
            $d['cliente_id'], $d['comercial_asignado'], $d['codigo_interno'], $d['fecha_ultima_interaccion'],
            $d['fecha_renovacion'], $d['nivel_prioridad'], $d['sla'], $d['documentacion_adjunta'],
            $d['consentimiento_rgpd'], $d['comentarios_internos']
        ]);
    }

    /** Actualizar registro */
    public function actualizar(int $id, array $d): void {
        $stmt = $this->db->prepare('
            UPDATE cliente_datos_administrativos SET
                cliente_id=?, comercial_asignado=?, codigo_interno=?, fecha_ultima_interaccion=?, fecha_renovacion=?,
                nivel_prioridad=?, sla=?, documentacion_adjunta=?, consentimiento_rgpd=?, comentarios_internos=?
            WHERE id=?
        ');
        $stmt->execute([
            $d['cliente_id'], $d['comercial_asignado'], $d['codigo_interno'], $d['fecha_ultima_interaccion'], $d['fecha_renovacion'],
            $d['nivel_prioridad'], $d['sla'], $d['documentacion_adjunta'], $d['consentimiento_rgpd'], $d['comentarios_internos'],
            $id
        ]);
    }

    /** Eliminar registro */
    public function eliminar(int $id): void {
        $stmt = $this->db->prepare('DELETE FROM cliente_datos_administrativos WHERE id = ?');
        $stmt->execute([$id]);
    }
}
