<?php

class Controller
{
    // Carga un modelo de la carpeta /models/
    public function model($model)
    {
        require_once '../models/' . $model . 'Model.php';
        return new $model();
    }

    // Carga una vista de la carpeta /views/
    public function view($view, $data = [])
    {
         // Crea variables con las claves del array: $contrato, $usuario, etc.
        if (is_array($data)) {
            extract($data, EXTR_SKIP);
        } 
        
        require_once '../views/' . $view . '.php';
    }
}