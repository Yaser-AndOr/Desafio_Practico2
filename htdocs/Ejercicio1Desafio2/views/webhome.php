<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
<title>Información recibida</title>
<link rel="stylesheet" href="css/resultados.css"/>
<script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<section>
<article>
<div id="info">
    <?php
    if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"):
        extract($_POST);
        $edad = -1;
        $anioActual = date("Y");
        $primerNombre = !empty($primerNombre) ? $primerNombre : "<a href = \"javascript: history.go(-1)\">No ingresó el nombre.</a>";
        $apellido = !empty($apellido) ? $apellido : "<a href = \"javascript: history.go(-1)\">No ingresó el apellido.</a>";
        $anioNacimiento = (empty($anioNacimiento) || $anioNacimiento < 1900 || $anioNacimiento > $anioActual) ? "<a href = \"javascript: history.go(-1)\">No ingresó el año de nacimiento correctamente.</a>" : $anioNacimiento;
        $terminosCondiciones = !empty($terminosCondiciones) ? $terminosCondiciones : "<a href = \"javascript: history.go(-1)\">Favor aceptar los términos y condiciones.</a>";
        if (strlen($anioNacimiento) == 4)
            $edad = $anioActual - $anioNacimiento;



        $concat =  $primerNombre . " " . $apellido;
        if ($terminosCondiciones != "on"):
            echo "\n" . $terminosCondiciones . "\n\n";
        else:
            echo "Hola " . $concat . ", " . ( ($edad<0) ? $anioNacimiento : " nacido en el año " . $anioNacimiento . "; tú tienes " . $edad . " años de edad. Bienvenido :)");
        endif;

    else:
        echo "\nNo se han ingresado desde el formulario\n\n";
    endif;
    echo "<br><a href=\"home.html\">Volver</a>";
    ?>
</div>
</article>
</section>
</body>
</html>