<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicion de Categorias</h1>
    <form action="../categorias" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" rows="5" cols="20"></textarea><br>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>