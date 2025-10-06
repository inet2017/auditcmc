<?php

    function esAdmin() {
    return isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'admin';
    }

    function esCliente() {
        return isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'cliente';
    }

    function esTecnico() {
        return isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'tecnico';
    }

?>