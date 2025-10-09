<?php


require_once 'Controller.php';

// /controllers/ClienteController.php
class ContratoController extends Controller {

     // Cargamos el listado de contratos.
      public function listar() {
        $model = $this->model('Contrato');
        $contratos = $model->listar();

        $this->view('gestiones/contratos/list',['contratos' => $contratos]);
    }

     // Crea un nuevo cliente.
     public function crear() {
        $model = $this->model('Usuario');

        $nombre     = $_POST['nombre'];
    
        $errors = [];

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
            return;
        }

        $model->crearClienteCompleto($nombre, $apellidos, $email, $password, $rol, $activado, $telefono, $direccion, $avatar, $firma);
       header('Location: ../public/index.php?action=clientes');
    }

    // Ver contrato o plantilla.
    public function ver($id) {
        $usuarioModel = $this->model('Usuario');
        $cliente = $usuarioModel->obtenerPorId($id);
        $this->view('cliente/ver', ['cliente' => $cliente]);
    }

    // Editar  contrato o plantilla.
    public function editar($id) {
        $usuarioModel = $this->model('Contrato');
        $contrato = $usuarioModel->obtenerPorId($id);
        $this->view('gestiones/contratos/editar', ['contrato' => $contrato]);
    }




}
