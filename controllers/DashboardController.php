<?php

require_once 'Controller.php';
require_once '../helpers/auth.php';

// /controllers/HomeController.php
class DashboardController extends Controller { 
    public function index() {

        /*
        $modelo = $this->model('Incidencia');
        $IncidenciasAbiertas = $modelo->obtenerAbiertas();
        $estadisticas = [
            'abiertas' => $modelo->contarPorEstado('Abierta'),
            'resueltas_hoy' => $modelo->contarResueltasHoy(),
            'en_espera' => $modelo->contarPorEstado('En espera'),
            'urgentes' => $modelo->contarPorPrioridad('Crítica'),
        ];
        
        */
        //$this->view('dashboard/dashboard' , ['incidencias' => $IncidenciasAbiertas, 'estadisticas' => $estadisticas]);
        $this->view('dashboard/dashboard');
    }
}
