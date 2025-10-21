<?php
// /controllers/ClienteDatosContactoController.php
require_once 'Controller.php';

class ClienteDatosContactoController extends Controller {

    public function listar() {
        $model = $this->model('ClienteDatosContacto');
        $cliente_id = isset($_GET['cliente_id']) ? (int)$_GET['cliente_id'] : null;
        $q = $_GET['q'] ?? null; // búsqueda simple
        $rows = $model->listar($cliente_id, $q);

        $this->view('gestiones/cliente_datos_contacto/list', [
            'rows' => $rows,
            'cliente_id' => $cliente_id,
            'q' => $q,
        ]);
    }

    public function crear() {
        $model = $this->model('ClienteDatosContacto');
        $clienteContacto = [
            'id' => isset($in['id']) ? (int)$in['id'] : null,
            'cliente_id' => isset($in['cliente_id']) ? (int)$in['cliente_id'] : 0,
            'nombre' => trim($in['nombre'] ?? ''),
            'apellidos' => trim($in['apellidos'] ?? ''),
            'cargo' => trim($in['cargo'] ?? ''),
            'departamento' => trim($in['departamento'] ?? ''),
            'telefono' => trim($in['telefono'] ?? ''),
            'movil' => trim($in['movil'] ?? ''),
            'email' => trim($in['email'] ?? ''),
            'notas' => trim($in['notas'] ?? ''),
            'fecha_alta' => trim($in['fecha_alta'] ?? ''),
            'estado_contacto' => $in['estado_contacto'] ?? 'Activo',
        ];
        // Fecha por defecto hoy si no viene
        if (empty($clienteContacto['fecha_alta'])) $clienteContacto['fecha_alta'] = date('Y-m-d');
        $model->crear($clienteContacto);

        $redir = 'index.php?action=cliente_contactos';
        if (!empty($d['cliente_id'])) $redir .= '&cliente_id=' . (int)$d['cliente_id'];
        header('Location: ' . $redir);
    }

    public function editar($id) {
        $model = $this->model('ClienteDatosContacto');
        $clienteContacto = $model->obtenerPorId((int)$id);
        if (!$row) { http_response_code(404); exit('Contacto no encontrado'); }
        $this->view('gestiones/cliente_datos_contacto/editar', [ 'row' => $clienteContacto ]);
    }

    public function actualizar() {
        $model = $this->model('ClienteDatosContacto');
        $clienteContacto = [
            'id' => isset($in['id']) ? (int)$in['id'] : null,
            'cliente_id' => isset($in['cliente_id']) ? (int)$in['cliente_id'] : 0,
            'nombre' => trim($in['nombre'] ?? ''),
            'apellidos' => trim($in['apellidos'] ?? ''),
            'cargo' => trim($in['cargo'] ?? ''),
            'departamento' => trim($in['departamento'] ?? ''),
            'telefono' => trim($in['telefono'] ?? ''),
            'movil' => trim($in['movil'] ?? ''),
            'email' => trim($in['email'] ?? ''),
            'notas' => trim($in['notas'] ?? ''),
            'fecha_alta' => trim($in['fecha_alta'] ?? ''),
            'estado_contacto' => $in['estado_contacto'] ?? 'Activo',
        ];
        $model->actualizar($d);
        $redir = 'index.php?action=cliente_contactos';
        if (!empty($clienteContacto['cliente_id'])) $redir .= '&cliente_id=' . (int)$clienteContacto['cliente_id'];
        header('Location: ' . $redir);
    }

    public function eliminar($id) {
        $model = $this->model('ClienteDatosContacto');
        $model->eliminar((int)$id);
        header('Location: index.php?action=cliente_contactos');
    }

    /*
    private function sanitize(array $in): array {
        return [
            'id' => isset($in['id']) ? (int)$in['id'] : null,
            'cliente_id' => isset($in['cliente_id']) ? (int)$in['cliente_id'] : 0,
            'nombre' => trim($in['nombre'] ?? ''),
            'apellidos' => trim($in['apellidos'] ?? ''),
            'cargo' => trim($in['cargo'] ?? ''),
            'departamento' => trim($in['departamento'] ?? ''),
            'telefono' => trim($in['telefono'] ?? ''),
            'movil' => trim($in['movil'] ?? ''),
            'email' => trim($in['email'] ?? ''),
            'notas' => trim($in['notas'] ?? ''),
            'fecha_alta' => trim($in['fecha_alta'] ?? ''),
            'estado_contacto' => $in['estado_contacto'] ?? 'Activo',
        ];
    }

    */
}
