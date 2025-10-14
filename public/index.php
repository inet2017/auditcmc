
<?php

session_start();
// Control de acceso a los controladores.

// Acción actual
$action = $_GET['action'] ?? '';


// Acciones que NO requieren sesión (públicas)
$accionesPublicas = ['login', 'logout'];

// Si no está logueado y la acción NO es pública → redirigir al login
if (!isset($_SESSION['usuario']) && !in_array($action, $accionesPublicas)) {
    header('Location: index.php?action=login');
    exit();
}

// **** para realizar LOGIN.
if ($action === 'login') {
    require_once '../controllers/LoginController.php';
    $controller = new LoginController();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->autenticar();
    } else {
        $controller->mostrarFormulario();
    }

    // **** ACCESO DASHBOARD.
}elseif ($action === 'dashboard') {
    
    require_once '../controllers/DashboardController.php';
    $controller = new DashboardController();
    $controller->index();
   
   

// CUALQUIER TAREA  CON CONTRATOS.
} elseif (str_starts_with($action, 'contratos') || $action === 'crear_contrato'  || $action === 'editar_contrato' || $action === 'actualizar_contrato' || $action === 'eliminar_contrato'){

     require_once '../controllers/ContratoController.php';
    $controller = new ContratoController();

    if ($action === 'contratos') {
        $controller->listar();
    } elseif ($action === 'crear_contrato') {
        $controller->crear();
    } elseif ($action === 'editar_contrato' && isset($_GET['id'])) {
        $controller->editar($_GET['id']);
    }elseif ($action === 'actualizar_contrato' && isset($_POST['id'])) {
        var_dump($POST['id']);
        $controller->actualizar($_POST['id']);
    } elseif ($action === 'eliminar_contrato' && isset($_GET['id'])) {
        $controller->eliminar($_GET['id']);
    }

    // CUALQUIER TAREA  CON CLIENTES.
    
// CUALQUIER TAREA  CON CLIENTES.
} elseif (str_starts_with($action, 'clientes') || $action === 'nuevo_cliente'  || $action === 'crear_cliente'  || $action === 'editar_cliente' || $action === 'actualizar_cliente' || $action === 'eliminar_cliente'){

     require_once '../controllers/ClienteController.php';
    $controller = new ClienteController();

    if ($action === 'clientes') {
        $controller->listar();
    } elseif ($action === 'nuevo_cliente') {
        $controller->form();
    } elseif ($action === 'nuevo_contrato' && isset($_GET['id'])) {
        $controller->editar($_GET['id']);
    }elseif ($action === 'actualizar_contrato' && isset($_POST['id'])) {
        var_dump($POST['id']);
        $controller->actualizar($_POST['id']);
    } elseif ($action === 'eliminar_contrato' && isset($_GET['id'])) {
        $controller->eliminar($_GET['id']);
    }

    // CUALQUIER TAREA  CON CLIENTES.
    
}else{

        // En el caso que no tenga argumento o no coincida.
        if (!isset($_SESSION['usuario'])) {
                header('Location: index.php?action=login');
                exit();
        }
}

