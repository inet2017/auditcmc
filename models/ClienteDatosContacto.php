<?php
// /models/ClienteDatosContacto.php
require_once '../config/database.php';

class ClienteDatosContacto {
    private PDO $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    /** Listar contactos; opcionalmente por cliente y/o búsqueda */
    public function listar(?int $cliente_id = null, ?string $q = null): array {
        $where = [];
        $params = [];
        if ($cliente_id) { $where[] = 'cliente_id = ?'; $params[] = $cliente_id; }
        if ($q) {
            $where[] = '(nombre LIKE ? OR apellidos LIKE ? OR email LIKE ? OR telefono LIKE ? OR movil LIKE ?)';
            $like = "%$q%"; array_push($params, $like, $like, $like, $like, $like);
        }
        $sql = 'SELECT * FROM cliente_datos_contacto';
        if ($where) { $sql .= ' WHERE ' . implode(' AND ', $where); }
        $sql .= ' ORDER BY estado_contacto DESC, nombre ASC, apellidos ASC, created_at DESC';

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare('SELECT * FROM cliente_datos_contacto WHERE id = ?');
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public function crear(array $d): void {
        $stmt = $this->db->prepare('INSERT INTO cliente_datos_contacto (cliente_id, nombre, apellidos, cargo, departamento, telefono, movil, email, notas, fecha_alta, estado_contacto) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->execute([
            $d['cliente_id'], $d['nombre'], $d['apellidos'], $d['cargo'], $d['departamento'], $d['telefono'], $d['movil'], $d['email'], $d['notas'], $d['fecha_alta'], $d['estado_contacto']
        ]);
    }

    public function actualizar(array $d): void {
        $stmt = $this->db->prepare('UPDATE cliente_datos_contacto SET cliente_id=?, nombre=?, apellidos=?, cargo=?, departamento=?, telefono=?, movil=?, email=?, notas=?, fecha_alta=?, estado_contacto=? WHERE id=?');
        $stmt->execute([
            $d['cliente_id'], $d['nombre'], $d['apellidos'], $d['cargo'], $d['departamento'], $d['telefono'], $d['movil'], $d['email'], $d['notas'], $d['fecha_alta'], $d['estado_contacto'], $d['id']
        ]);
    }

    public function eliminar(int $id): void {
        $stmt = $this->db->prepare('DELETE FROM cliente_datos_contacto WHERE id = ?');
        $stmt->execute([$id]);
    }
}


?>