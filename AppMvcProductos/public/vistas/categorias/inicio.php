<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Listado de Categorias</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CATEGORIA</th>
                    <th>DESCRIPCION</th>
                    <th><a href="categorias/crear">Adicionar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($datos); $i++) : ?>
                    <tr>
                        <?php foreach ($datos[$i] as $dato) : ?>
                        <td><?= $dato ?></td>
                        <?php endforeach ?>
                        <td width="150">
                            <a href="categorias/ver/<?= $datos[$i]["id"] ?>">Ver</a>
                            <a href="categorias/editar/<?= $datos[$i]["id"] ?>">Editar</a>
                            <form id="formEliminar" method="post" action="categorias/eliminar/<?= $datos[$i]['id'] ?>">
                                <a href="javascript:eliminar(<?= $datos[$i]['id'] ?>)">Eliminar</a>
                            </form>
                        </td>
                    </tr>
                <?php endfor ?>
            </tbody>
        </table
    </body>
</html>