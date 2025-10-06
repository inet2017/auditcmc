
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

}elseif ($action === 'dashboard') {
    
    require_once '../controllers/DashboardController.php';
    $controller = new DashboardController();
    $controller->index();
   
   
// **** CIERRE DE SESIÓN.
}else{

        // En el caso que no tenga argumento o no coincida.
        if (!isset($_SESSION['usuario'])) {
                header('Location: index.php?action=login');
                exit();
        }
}

