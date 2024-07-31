<?php

    use App\Controladores\InicioControlador;
    use App\Controladores\CategoriaControlador;
    use Libreria\Enrutador;

    // Definir rutas
    Enrutador::get("/", [InicioControlador::class, "inicio"]); // Ruta principal

    Enrutador::get("categorias", function () { // Ruta para categorías
        return "Ruta GET de categorías";
    });

    Enrutador::get("productos", function () { // Ruta para productos
        return "Ruta GET de productos";
    });

    Enrutador::get("productos/:miVar", function ($var) { // Ruta para productos con variable
        return "Ruta GET de productos con variable: $var";
    });

    Enrutador::get("categorias", [CategoriaControlador::class, "inicio"]); // Categorías inicio
    Enrutador::get("categorias/crear", [CategoriaControlador::class, "crear"]); // Crear categoría
    Enrutador::get("categorias/editar/:id", [CategoriaControlador::class, "editar"]); // Editar categoría
    
    Enrutador::get("categorias/ver/:id", [CategoriaControlador::class, "ver"]);
    Enrutador::post("categorias", [CategoriaControlador::class, "insertar"]);
    //cuando creo
    Enrutador::post("categorias/ver/:id", [CategoriaControlador::class,"actualizar"]); //cuando edito
    Enrutador::post("categorias/eliminar/:id", [CategoriaControlador::class,"eliminar"]); //cuando elimino
    

    // Obtener la ruta actual y ejecutar el controlador correspondiente
    Enrutador::obtenerRuta();
?>
