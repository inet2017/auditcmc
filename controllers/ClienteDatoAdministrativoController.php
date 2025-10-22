<?php
// /controllers/DatoAdministrativoController.php
require_once 'Controller.php';

class ClienteDatoAdministrativoController extends Controller {

    public function listar() {
        $model = $this->model('DatoAdministrativo');
        $cliente_id = isset($_GET['cliente_id']) ? (int)$_GET['cliente_id'] : null;
        $rows = $model->listar($cliente_id);

        $this->view('gestiones/datos_administrativos/list', [
            'rows' => $rows,
            'cliente_id' => $cliente_id
        ]);
    }

    public function crear() {
        $model = $this->model('DatoAdministrativo');
        $d = $this->sanitize($_POST);

        // Validaciones mínimas
        if (empty($d['cliente_id'])) { die('cliente_id es obligatorio'); }

        // Subida documento
        $d['documentacion_adjunta'] = null;
        if (!empty($_FILES['documentacion_adjunta']['name'])) {
            $d['documentacion_adjunta'] = $this->handleUpload($_FILES['documentacion_adjunta']);
        }

        $model->crear($d);

        
        
        header('Location: index.php?action=editar_cliente&id='.(int)$d['cliente_id']);
    }

    public function editar($id) {
        $model = $this->model('DatoAdministrativo');
        $row = $model->obtenerPorId((int)$id);
        if (!$row) { http_response_code(404); exit('Registro no encontrado'); }

        $this->view('gestiones/datos_administrativos/editar', ['row' => $row]);
    }

    public function actualizar() {
        $model = $this->model('DatoAdministrativo');
        $id = (int)$_POST['id'];

        $row = $model->obtenerPorId($id);
        if (!$row) { http_response_code(404); exit('Registro no encontrado'); }

        $d = $this->sanitize($_POST);
        $d['documentacion_adjunta'] = $row['documentacion_adjunta'];

        // Reemplazo de archivo si llega nuevo
        if (!empty($_FILES['documentacion_adjunta']['name'])) {
            $d['documentacion_adjunta'] = $this->handleUpload($_FILES['documentacion_adjunta']);
        }

        $model->actualizar($id, $d);

        
        header('Location: index.php?action=editar_cliente&id='.(int)$d['cliente_id']);
    }

    public function eliminar($id) {
        $model = $this->model('DatoAdministrativo');
        $model->eliminar((int)$id);

        header('Location: index.php?action=editar_cliente&id='.$clienteId);
    }

    /* ---- Helpers ---- */

    private function sanitize(array $in): array {
        return [
            'cliente_id' => isset($in['cliente_id']) ? (int)$in['cliente_id'] : 0,
            'comercial_asignado' => trim($in['comercial_asignado'] ?? ''),
            'codigo_interno' => trim($in['codigo_interno'] ?? ''),
            'fecha_ultima_interaccion' => !empty($in['fecha_ultima_interaccion']) ? $in['fecha_ultima_interaccion'] : null,
            'fecha_renovacion' => !empty($in['fecha_renovacion']) ? $in['fecha_renovacion'] : null,
            'nivel_prioridad' => $in['nivel_prioridad'] ?? 'Media',
            'sla' => trim($in['sla'] ?? ''),
            'consentimiento_rgpd' => isset($in['consentimiento_rgpd']) ? 1 : 0,
            'comentarios_internos' => trim($in['comentarios_internos'] ?? ''),
        ];
    }

    private function handleUpload(array $file): ?string {
        if ($file['error'] !== UPLOAD_ERR_OK) { return null; }
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['pdf','doc','docx','xls','xlsx','png','jpg','jpeg'])) {
            throw new RuntimeException('Formato de archivo no permitido');
        }
        $dir = __DIR__ . '/../public/uploads/doc_adjuntos';
        if (!is_dir($dir)) { mkdir($dir, 0775, true); }
        $filename = uniqid('doc_') . '.' . $ext;
        $dest = $dir . '/' . $filename;
        move_uploaded_file($file['tmp_name'], $dest);
        return '/uploads/doc_adjuntos/' . $filename;
    }
}
