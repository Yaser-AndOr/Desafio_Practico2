<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-around h-100" style="background-color: lightgray">
    <?php
        $idioma = $_POST['idioma'] ?? 'IDIOMA';
        $idiomas['Inglés']['Básico'] = '25';
        $idiomas['Inglés']['Intermedio'] = '15';
        $idiomas['Inglés']['Avanzado'] = '10';
        $idiomas['Francés']['Básico'] = '10';
        $idiomas['Francés']['Intermedio'] = '5';
        $idiomas['Francés']['Avanzado'] = '2';
        $idiomas['Mandarín']['Básico'] = '8';
        $idiomas['Mandarín']['Intermedio'] = '4';
        $idiomas['Mandarín']['Avanzado'] = '1';
        $idiomas['Ruso']['Básico'] = '12';
        $idiomas['Ruso']['Intermedio'] = '8';
        $idiomas['Ruso']['Avanzado'] = '4';
        $idiomas['Portugués']['Básico'] = '30';
        $idiomas['Portugués']['Intermedio'] = '15';
        $idiomas['Portugués']['Avanzado'] = '10';
        $idiomas['Japonés']['Básico'] = '90';
        $idiomas['Japonés']['Intermedio'] = '25';
        $idiomas['Japonés']['Avanzado'] = '67';
    ?>

    <div class="container position-absolute align-midle h-100 w-50 p-5">
        <h2 class="container d-flex justify-content-center" aria-label="Anchor">Escoja el idioma<br>a revisar</h2>
        <br><br>
        <form class="container d-flex justify-content-center" method="post" action="">
            <select name="idioma" type="submit" id="" onchange="this.form.submit()" >
                <option value="">Idioma</option>
                <option value="Inglés">Inglés</option>
                <option value="Francés">Francés</option>
                <option value="Mandarín">Mandarín</option>
                <option value="Ruso">Ruso</option>
                <option value="Portugués">Portugués</option>
                <option value="Japonés">Japonés</option>
            </select>
        </form>
        <br><br>
        <div class="container d-flex justify-content-center">
            <div class="col" style="background-color: lightpink">
                <h4 class="row p-3" style="background-color: lightblue">Dificultad</h4>
                <h4 class="row p-3">Básica</h4>
                <h4 class="row p-3">Intermedia</h4>
                <h4 class="row p-3">Avanzada</h4>
            </div>
            <div class="col" style="background-color: lightpink">
                <?php
                    echo "<h4 class=\"row p-3\" style=\"background-color: lightgreen\">{$idioma}</h4>";
                    echo "<h4 class=\"row p-3\">";
                    echo $idiomas[$idioma]['Básico']??'0';
                    echo "</h4>";
                    echo "<h4 class=\"row p-3\">";
                    echo $idiomas[$idioma]['Intermedio']??'0';
                    echo "</h4>";
                    echo "<h4 class=\"row p-3\">";
                    echo $idiomas[$idioma]['Avanzado']??'0';
                    echo "</h4>";
                ?>
            </div>
        </div>
        <br><br>
        <form class="container d-flex justify-content-around" method="post" action="../">
            <input type="submit" name="pagina" value="Atrás" class="btn btn-primary">
        </form>
    </div>
</body>
</html>