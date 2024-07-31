<?php
    namespace App\Controladores;
    class Controlador
    {
    //atributos
    //metodos
    public function cargarVista($nomArchivo, $datos = [])
    {
    //datos es un arreglo asociativo (clave=>valor)
    //extract convierte c/clave en una variable y le asigna el valor.
    extract($datos);
    //var_dump($datos);
    ob_start(); //inicia almacenamiento en buffer de salida(memoria), y no mostrara la salida.
    require_once "../public/vistas/{$nomArchivo}.php";
    $vista = ob_get_clean(); //obtiene el contenido del buffer y limpia.
    return $vista;
}
}