<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'Biblioteca.php'?>
    <div class="container mt-5">
        <h1 class="mb-4">Inventario de Libros</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validarFormulario(event)">

            <div class="form-group">
                <label for="author">Autor:</label>
                <input name="author" type="text" class="form-control" id="author" required placeholder="Apellido, Nombre">
            </div>
            <div class="form-group">
                <label for="title">Título del Libro:</label>
                <input name="title"type="text" class="form-control" id="title" required placeholder="Título del Libro">
            </div>
            <div class="form-group">
                <label for="numedicion">Numero de edicion:</label>
                <input name="numedicion" type="number" class="form-control" id="numedicion" required placeholder="Numero_de_edicion">
            </div>
            <div class="form-group">
                <label for="LugPubli">Lugar de publicación:</label>
                <input name="LugPubli" type="text" class="form-control" id="LugPubli" required placeholder="Lugar de publicación">
            </div>
            <div class="form-group">
                <label for="Editorial">Editorial:</label>
                <input name="Editorial" type="text" class="form-control" id="Editorial" required placeholder="La_Editorial">
            </div>
            <div class="form-group">
                <label for="AnoEdi">Año de la edición:</label>
                <input name="AnoEdi" type="number" class="form-control" id="AnoEdi" required placeholder="Ano_de_la_edición">
            </div>
            <div class="form-group">
                <label for="NumPaginas">Número de páginas:</label>
                <input name="NumPaginas" type="text" class="form-control" id="NumPaginas" required placeholder="Numero_de_paginas">
            </div>
            <div class="form-group">
                <label for="Notas">Notas:</label>
                <input name="Notas" type="text" class="form-control" id="Notas" required placeholder="Notas">
            </div>
            <div class="form-group">
                <label for="ISBN">ISBN:</label>
                <input name="ISBN" type="text" class="form-control" id="ISBN" required placeholder="ISBN">
            </div>
            <button type="submit" class="btn btn-primary" id="addBookBtn">Agregar Libro</button>
            <a href="Biblioteca.php" class="btn btn-secondary">Ver libros</a>
        </form>
        <div id="bookList"></div>
    </div>

<div class="container">
    <div class="row row-cols-2 row-cols-lg-3 g-2">
        <?php displayBooks(); ?>
    </div>
</div>
</body>
</html>