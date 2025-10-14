<?php
require_once 'Controller.php';


class DatoAdministrativoController extends Controller {


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
        $data = [
            'cliente_id' => (int)($_POST['cliente_id'] ?? 0),
            'comercial_asignado' => trim($_POST['comercial_asignado'] ?? ''),
            'codigo_interno' => trim($_POST['codigo_interno'] ?? ''),
            'fecha_ultima_interaccion' => $_POST['fecha_ultima_interaccion'] ?? null,
            'fecha_renovacion' => $_POST['fecha_renovacion'] ?? null,
            'nivel_prioridad' => $_POST['nivel_prioridad'] ?? 'Media',
            'sla' => trim($_POST['sla'] ?? ''),
            'consentimiento_rgpd' => isset($_POST['consentimiento_rgpd']) ? 1 : 0,
            'comentarios_internos' => trim($_POST['comentarios_internos'] ?? ''),
            'documentacion_adjunta' => null,
        ];

        if (!empty($_FILES['documentacion_adjunta']['name'])) {
            $data['documentacion_adjunta'] = $this->handleUpload($_FILES['documentacion_adjunta']);
            }


            $model->crear($data);
            header('Location: index.php?action=datos_administrativos');
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


        $data = [
            'cliente_id' => (int)($_POST['cliente_id'] ?? $row['cliente_id']),
            'comercial_asignado' => trim($_POST['comercial_asignado'] ?? ''),
            'codigo_interno' => trim($_POST['codigo_interno'] ?? ''),
            'fecha_ultima_interaccion' => $_POST['fecha_ultima_interaccion'] ?? null,
            'fecha_renovacion' => $_POST['fecha_renovacion'] ?? null,
            'nivel_prioridad' => $_POST['nivel_prioridad'] ?? 'Media',
            'sla' => trim($_POST['sla'] ?? ''),
            'consentimiento_rgpd' => isset($_POST['consentimiento_rgpd']) ? 1 : 0,
            'comentarios_internos' => trim($_POST['comentarios_internos'] ?? ''),
            'documentacion_adjunta' => $row['documentacion_adjunta'],
        ];


        if (!empty($_FILES['documentacion_adjunta']['name'])) {
            $data['documentacion_adjunta'] = $this->handleUpload($_FILES['documentacion_adjunta']);
        }


        $model->actualizar($id, $data);
        header('Location: index.php?action=datos_administrativos');
    }

    public function eliminar($id) {
        $model = $this->model('DatoAdministrativo');
        $model->eliminar((int)$id);
        header('Location: index.php?action=datos_administrativos');
    }

    private function handleUpload(array $file): string {
        if ($file['error'] !== UPLOAD_ERR_OK) { return null; }
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, ['pdf','doc','docx','xls','xlsx','png','jpg','jpeg'])) {
            throw new RuntimeException('Formato no permitido');
        }

        $dir = __DIR__ . '/../public/uploads/doc_adjuntos';
        if (!is_dir($dir)) { mkdir($dir, 0775, true); }
        $filename = uniqid('doc_') . '.' . $ext;
        $dest = $dir . '/' . $filename;
        move_uploaded_file($file['tmp_name'], $dest);

        return '/uploads/doc_adjuntos/' . $filename;
    }

}
