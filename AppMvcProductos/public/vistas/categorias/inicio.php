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
            <?php for ($i = 0; $i < count($datos['registros']); $i++) : ?>
                <tr>
                    <?php foreach ($datos['registros'][$i] as $dato) : ?>
                    <td><?= $dato ?></td>
                    <?php endforeach ?>
                    <td width="150">
                        <a href="categorias/ver/<?= $datos['registros'][$i]["id"] ?>">Ver</a>
                        <a href="categorias/editar/<?= $datos['registros'][$i]["id"] ?>">Editar</a>
                        <form id="formEliminar" method="post" action="categorias/eliminar/<?= $datos['registros'][$i]['id'] ?>">
                            <a href="javascript:eliminar(<?= $datos['registros'][$i]['id'] ?>)">Eliminar</a>
                        </form>
                    </td>
                </tr>
            <?php endfor ?>
        </tbody>
    </table>
    <?php
    echo "Total registros: " . $datos["totalRegistros"] . "<br>";
    echo "Total paginas: " . $datos["totalPaginas"] . "<br>";
    echo "Paginas: ";
    for ($i = 1; $i <= $datos["totalPaginas"]; $i++) : ?>
    <a style="font-size: xx-large;" href="categorias?pagina=<?= $i ?>"><?= $i ?></a>
    <?php endfor ?> 
    <script>
        let formEliminar = document.querySelector("#formEliminar");
        function eliminar(id) {
            let respuesta = confirm("Desea eliminar el registro con id " + id);
            if (respuesta) {
                formEliminar.submit();
            }
        }
    </script>