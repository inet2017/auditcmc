<?php
// /controllers/ClienteController.php
require_once 'Controller.php';

class ClienteController extends Controller {

    public function listar() {
        $model = $this->model('Cliente');
        $q = $_GET['q'] ?? null;
        $clientes = $model->listar($q);

        $this->view('gestiones/clientes/list', [
            'clientes' => $clientes,
            'q' => $q
        ]);
    }

    public function form() {
         $this->view('gestiones/clientes/nuevo');
    }
    public function crear() {
        $model = $this->model('Cliente');

        $data = [
            'id' => isset($in['id']) ? (int)$in['id'] : null,
            'nombre' => trim($in['nombre'] ?? ''),
            'razon_social' => trim($in['razon_social'] ?? ''),
            'cif' => strtoupper(trim($in['cif'] ?? '')),
            'tipo_empresa' => $in['tipo_empresa'] ?? 'S.L.',
            'actividad' => trim($in['actividad'] ?? ''),
            'direccion' => trim($in['direccion'] ?? ''),
            'codigo_postal' => trim($in['codigo_postal'] ?? ''),
            'poblacion' => trim($in['poblacion'] ?? ''),
            'provincia' => trim($in['provincia'] ?? ''),
            'pais' => trim($in['pais'] ?? 'España'),
            'telefono_principal' => trim($in['telefono_principal'] ?? ''),
            'telefono_secundario' => trim($in['telefono_secundario'] ?? ''),
            'email' => trim($in['email'] ?? ''),
            'sitio_web' => trim($in['sitio_web'] ?? ''),
            'tipo_contrato_id' => !empty($in['tipo_contrato_id']) ? (int)$in['tipo_contrato_id'] : null,
            'numero_contrato' => trim($in['numero_contrato'] ?? ''),
            'fecha_alta' => !empty($in['fecha_alta']) ? $in['fecha_alta'] : date('Y-m-d'),
            'estado_cliente' => $in['estado_cliente'] ?? 'Activo',
            'observaciones' => trim($in['observaciones'] ?? ''),
        ];
        $data['logotipo'] = null;

        // Upload opcional de logotipo
        if (!empty($_FILES['logotipo']['name'])) {
            $data['logotipo'] = $this->handleUpload($_FILES['logotipo']);
        }

        $model->crear($data);
        header('Location: index.php?action=clientes');
    }

    public function editar($id) {
        $model = $this->model('Cliente');
        $cliente = $model->obtenerPorId((int)$id);
        if (!$cliente) { http_response_code(404); exit('Cliente no encontrado'); }
        $contratoTipos = $model->contratoTipos();

        $this->view('gestiones/clientes/editar', [
            'cliente' => $cliente,
            'contratoTipos' => $contratoTipos
        ]);
    }

    public function actualizar() {
        $model = $this->model('Cliente');
        $data = $this->sanitize($_POST);

        // Subida de logotipo si se reemplaza
        if (!empty($_FILES['logotipo']['name'])) {
            $data['logotipo'] = $this->handleUpload($_FILES['logotipo']);
        } else {
            $data['logotipo'] = null; // para conservar el actual (COALESCE en SQL)
        }

        $model->actualizar($data);
        header('Location: index.php?action=clientes');
    }

    public function eliminar($id) {
        $model = $this->model('Cliente');
        $model->eliminar((int)$id);
        header('Location: index.php?action=clientes');
    }

    /* ---- Helpers ---- */

    

    private function handleUpload(array $file): ?string {
        if ($file['error'] !== UPLOAD_ERR_OK) { return null; }
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['jpg','jpeg','png','gif','webp'])) {
            throw new RuntimeException('Formato de logotipo no permitido');
        }
        $dir = __DIR__ . '/../public/uploads/logotipos';
        if (!is_dir($dir)) { mkdir($dir, 0775, true); }
        $filename = uniqid('logo_') . '.' . $ext;
        $dest = $dir . '/' . $filename;
        move_uploaded_file($file['tmp_name'], $dest);
        return '/uploads/logotipos/' . $filename;
    }
}
