<?php
// Modelo para que maneja la lógica de acceso de los usuarios.
require_once '../config/database.php';

class Contrato {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    // Retorna un array asociativo de todos los contratos
    public function listar() {
        $stmt = $this->db->query("SELECT * FROM `contrato_tipos`");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Retorna todos los datos de un array.
    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM contrato_tipos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crea un nuevo contratos
    public function crear($datos) {
        $stmt = $this->db->prepare("
            INSERT INTO `contrato_tipos` (`nombre`) VALUES (?)
        ");
        $stmt->execute([
            $datos['nombre'],
        ]);
    }

    // Actualiza un contratos.
    public function actualizar($datos) {
        $stmt = $this->db->prepare("
            UPDATE 
            contrato_tipos 
            SET nombre = ? 
            WHERE id = ?");

        $stmt->execute([
            $datos['nombre'],
            $datos['id']
        ]);
    }

    // Elimina un contrato especificado por su Id.
    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM contrato_tipos WHERE id = ?");
        $stmt->execute([$id]);
    }
}
