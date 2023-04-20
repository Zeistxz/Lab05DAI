<!DOCTYPE html>
<html>
    <head>
        <title>Sueldo hijos y n° de ventas</title>
    </head>
    <body>
<?php
    $hijos_en_edad_escolar = floatval ($_POST['hijos_en_edad_escolar']);
    $total_vendido = floatval ($_POST['total_vendido']);
    $sueldo_basico=600;
    $bonificacion=50*$hijos_en_edad_escolar;
    $comision=$total_vendido*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'Valor de bonificacion por hijos: ' . $bonificacion . "<br/>\n";
    echo 'Descuento de comision: ' . $comision . "<br/>\n";
    echo 'Descuento por ley: ' . $descuento . "<br/>\n";
    echo 'Valor de sueldo basico: ' . $sueldo_basico . "<br/>\n";
    echo 'Valor de sueldo bruto: ' . $sueldo_bruto . "<br/>\n";
    echo 'Sueldo neto: ' . $sueldo_neto . "<br/>\n";
?>

    <form method="post" action=""> 
        Ingresar n° de hijos en edad escolar: <br> <input name="hijos_en_edad_escolar" required="required" step="0.000001" type="number" /><br>
        Ingresar el total vendido:<br>  <input name="total_vendido" required="required" step="0.000001" type="number" /><br>
        Resultado :<br>
        <input type="submit" name="Suma" value="Suma">
    </form>
    </body>
</html>