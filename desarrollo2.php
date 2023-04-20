<!DOCTYPE html>
<html>
    <head>
        <title>Fabrica de gaseosas</title>
    </head>
    <body>
<?php
    $cantidad =$_POST['cantidad'];
    $precio=  $_POST['precio'];
    $descuentodeprecio = $precio * 0.05;
    $nprecio=$precio-$descuentodeprecio ;
    $icompra=$nprecio*$cantidad;
    $descuento=0.07*$icompra;
    $iapagar=$icompra-$descuento;
    $obsequio = 2*$cantidad;
    echo 'Precio de la gaseosa: ' . $precio . "<br/>\n";
    echo 'Cantidad: ' . $cantidad . "<br/>\n";
    echo 'Nuevo precio: ' . $nprecio . "<br/>\n";
    echo 'Importe: ' . $icompra . "<br/>\n";
    echo 'Descuento: ' . $descuento . "<br/>\n";
    echo 'Impuesto a pagar: ' . $iapagar . "<br/>\n";
    echo 'Obsequios: ' . $obsequio . "<br/>\n";
?>

    <form method="post" action=""> 
        Ingresar el precio de la gaseosa: <br> <input name="precio" required="required" step="0.1" type="number" /><br>
        Ingresar la cantidad: <br>  <input name="cantidad" required="required" step="0.1" type="number" /><br>
        Resultado :<br>
        <input type="submit" name="Suma" value="Suma">
    </form>
    </body>
</html>