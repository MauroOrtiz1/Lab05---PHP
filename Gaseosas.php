<?php
    $precioGaseosa=$_POST['precioGaseosa'];
    $cantidadGaseosa=$_POST['cantidadGaseosa'];

    //Nuevo precio
    $nuevoPrecio=$precioGaseosa - ($precioGaseosa * 0.05);
    //Importe de la compra
    $importeCompra=$nuevoPrecio * $cantidadGaseosa;
    //Importe del descuento
    $importeDescuento=$importeCompra * 0.07;
    //importe pago
    $importePago=$importeCompra - $importeDescuento;
    //Obsequio
    $obsequio = 2 * $cantidadGaseosa;

    //Imprimir resultados
    echo "El nuevo precio de la gaseosa es: S/.".$nuevoPrecio."<br>";
    echo "El importe de la compra es: S/.".$importeCompra."<br>";
    echo "El importe del descuento es: S/.".$importeDescuento."<br>";
    echo "El importe a pagar es: S/.".$importePago."<br>";
    echo "El obsequio son ".$obsequio." caramelos<br>";