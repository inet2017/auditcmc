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
        $model = $this->model('Contrato');

        $nombre     = $_POST['nombre'];
    
        $errors = [];

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
            return;
        }

        $model->crear($nombre);
       header('Location: ../public/index.php?action=contratos');
    }


    // Editar  contrato o plantilla.
    public function editar($id) {
        $usuarioModel = $this->model('Contrato');
        $contrato = $usuarioModel->obtenerPorId($id);
        
         $this->view('gestiones/contratos/editar',['contrato' => $contrato]);
    }

     public function actualizar() {
        $model = $this->model('Contrato');
        $model->actualizar($_POST);
        header("Location: index.php?action=contratos");
    }
    
     // ELiminar contrato o plantilla.
     public function eliminar($id) {
        try{
            $usuarioModel=$this->model('Contrato');
            $usuarioModel->eliminar($id);
            header("Location: index.php?action=contratos");
        } catch (Exception $e) {
            echo "<script>alert('{$e->getMessage()}'); window.location.href='../public/index.php?action=contratos';</script>";
        }
     }




}
