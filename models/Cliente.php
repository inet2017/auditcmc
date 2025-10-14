<?php
// /models/Cliente.php
require_once '../config/database.php';

class Cliente {
    private PDO $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    /** Listado (opcionalmente con búsqueda simple por nombre/cif) */
    public function listar(?string $q = null): array {
        if ($q) {
            $sql = "SELECT c.*, ct.nombre AS contrato_tipo
                    FROM clientes c
                    LEFT JOIN contrato_tipos ct ON ct.id = c.tipo_contrato_id
                    WHERE c.nombre LIKE ? OR c.cif LIKE ?
                    ORDER BY c.created_at DESC";
            $stmt = $this->db->prepare($sql);
            $like = "%$q%";
            $stmt->execute([$like, $like]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $stmt = $this->db->query("SELECT c.*, ct.nombre AS contrato_tipo
                                  FROM clientes c
                                  LEFT JOIN contrato_tipos ct ON ct.id = c.tipo_contrato_id
                                  ORDER BY c.created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** Obtener un cliente por ID */
    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    /** Crear cliente */
    public function crear(array $d): void {
        $stmt = $this->db->prepare("
            INSERT INTO clientes
            (nombre, razon_social, cif, tipo_empresa, actividad, direccion, codigo_postal, poblacion, provincia, pais,
             telefono_principal, telefono_secundario, email, sitio_web, logotipo,
             tipo_contrato_id, numero_contrato, fecha_alta, estado_cliente, observaciones)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
        ");
        $stmt->execute([
            $d['nombre'], $d['razon_social'], $d['cif'], $d['tipo_empresa'], $d['actividad'], $d['direccion'],
            $d['codigo_postal'], $d['poblacion'], $d['provincia'], $d['pais'],
            $d['telefono_principal'], $d['telefono_secundario'], $d['email'], $d['sitio_web'], $d['logotipo'],
            $d['tipo_contrato_id'], $d['numero_contrato'], $d['fecha_alta'], $d['estado_cliente'], $d['observaciones']
        ]);
    }

    /** Actualizar cliente */
    public function actualizar(array $d): void {
        $stmt = $this->db->prepare("
            UPDATE clientes SET
                nombre=?, razon_social=?, cif=?, tipo_empresa=?, actividad=?, direccion=?, codigo_postal=?, poblacion=?, provincia=?, pais=?,
                telefono_principal=?, telefono_secundario=?, email=?, sitio_web=?, logotipo=COALESCE(?, logotipo),
                tipo_contrato_id=?, numero_contrato=?, fecha_alta=?, estado_cliente=?, observaciones=?
            WHERE id=?
        ");
        $stmt->execute([
            $d['nombre'], $d['razon_social'], $d['cif'], $d['tipo_empresa'], $d['actividad'], $d['direccion'],
            $d['codigo_postal'], $d['poblacion'], $d['provincia'], $d['pais'],
            $d['telefono_principal'], $d['telefono_secundario'], $d['email'], $d['sitio_web'], $d['logotipo'],
            $d['tipo_contrato_id'], $d['numero_contrato'], $d['fecha_alta'], $d['estado_cliente'], $d['observaciones'],
            $d['id']
        ]);
    }

    /** Eliminar cliente */
    public function eliminar(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = ?");
        $stmt->execute([$id]);
    }

    /** Catálogo de tipos de contrato */
    public function contratoTipos(): array {
        $stmt = $this->db->query("SELECT id, nombre FROM contrato_tipos ORDER BY nombre");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
