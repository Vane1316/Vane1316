<?php
    namespace App\Controladores;
 
    class InicioControlador extends Controlador
    {
        public function inicio()
        {
            $this->cargarVista("inicio", ["title" => "Titulo enviado por controlador", "body" => "Cuerpo enviado por el controlador"]);
        }
    }
?>