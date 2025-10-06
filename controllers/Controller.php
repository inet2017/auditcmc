<?php

class Controller
{
    // Carga un modelo de la carpeta /models/
    public function model($model)
    {
        require_once '../models/' . $model . '.php';
        return new $model();
    }

    // Carga una vista de la carpeta /views/
    public function view($view, $data = [])
    {
        require_once '../views/' . $view . '.php';
    }
}