<?php
// Modelo para que maneja la lógica de acceso de los usuarios.
require_once '../config/database.php';

class LoginModel {

    // Valida que el usuario y contraseña exista y es correcto.
    public function verificar($email, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        // Con el hash almacenado con la funcion password_verify. 
        if ($usuario && password_verify($password, $usuario['password'])) {
            // Si es correcta retorna el array con los datos.
            return $usuario;
        }
        // Verificación erronea.
        return false;
    }
}
?>

