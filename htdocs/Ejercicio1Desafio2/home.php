<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="js/validar.js"></script>
</head>
<body class="d-flex justify-content-around h-100" style="background-color: lightgray">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $paginaSeleccionada = $_POST['pagina'];
            switch ($paginaSeleccionada) {
                case "Asociativas":
                    header("Location: views/asociativos.php");
                    break;
                case "Arrays":
                    header("Location: views/array.php");
                    break;
                case "Combinadas":
                    header("Location: views/combinados.php");
                    break;
                case "Atrás":
                    header("Location: home.php");
                    break;
                default:
                    echo "Error: Selección no válida.";
            }
            exit();
        }
    ?>
    <div class="container position-absolute align-midle h-100 w-50 p-5">
        <h2 class="container d-flex justify-content-center" aria-label="Anchor">Escoja el tipo de<br>matriz a utilizar</h2>
        <br><br><br>
        <form class="container d-flex justify-content-around" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <input type="submit" name="pagina" value="Asociativas" class="btn btn-primary">
            <input type="submit" name="pagina" value="Arrays" class="btn btn-primary">
            <input type="submit" name="pagina" value="Combinadas" class="btn btn-primary">
        </form>

    </div>
</body>
</html>