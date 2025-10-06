<?php

require_once '../models/LoginModel.php';
require_once '../helpers/auth.php';

class LoginController {

            // Mostramos el formularo de inicio.
            public function mostrarFormulario() {
                
                require '../views/login/login_form.php';
                
            }

            // Si la verificación es correcta llevamos al dashboard de la APP:
            public function autenticar() {
                $modelo = new LoginModel();
                $usuario = $modelo->verificar($_POST['email'], $_POST['password']);
                
                if ($usuario) {
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['usuario_id'] = $usuario['id'];
                    $_SESSION['usuario_email'] = $usuario['email'];
                    $_SESSION['usuario_rol'] = $usuario['rol']; // 'admin', 'cliente', 'tecnico'
                    header('Location: index.php?action=dashboard');
                    
                } else {
                    // Si las credenciales son incorrectas.
                    $error = "Credenciales inválidas";
                    require '../views/header.php';
                    require '../views/login/login_form.php';
                    require '../views/footer.php';
                }
            }
}


