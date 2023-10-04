<?php
    $vendido=$_POST['cantidadVendido'];
    $hijos=$_POST['cantidadHijos'];
    //Sueldo Basico
    $sueldoBasico = 600;
    //Comision
    $comision=$vendido * 0.075;
    //Bonificacion
    $bonificacion=$hijos * 50;
    //Sueldo bruto
    $sueldoBruto=$sueldoBasico + $comision + $bonificacion;
    //Descuento
    $descuento=$sueldoBruto * 0.11;
    //Sueldo neto
    $sueldoNeto=$sueldoBruto - $descuento;

    //Imprimir resultados
    echo "La comisión es: S/.".$comision."<br>";
    echo "La bonificación es: S/.".$bonificacion."<br>";
    echo "El sueldo bruto es: S/.".$sueldoBruto."<br>";
    echo "El descuento es: S/.".$descuento."<br>";
    echo "El sueldo neto es: S/.".$sueldoNeto;