<?php

require_once 'modelos/producto.php';
require_once 'modelos/proveedor.php';

$pro = new Producto();
$pro->Id= 152552;
$pro->Nombre= 'gaseosa ' ;
$pro->Codigo= 1  ;
$pro->Precio=' $200' ;
$pro->Marca='coca cola '  ;


$p1= new Proveedor();
$p1->Id=25;
$p1->Nombre= 'prov1';
$p1->Cuil= 5858215252;
$p1->Direccion= 'san martin 123';
$p1->Telefono= 341562545;

$p2= new Proveedor();
$p2->Id=26;
$p2->Nombre= 'prov1';
$p2->Cuil= 585854154;
$p2->Direccion= 'san martin 999';
$p2->Telefono= 342424145;

$p3= new Proveedor();
$p3->Id=27;
$p3->Nombre= 'prov1';
$p3->Cuil= 696954154;
$p3->Direccion= 'san martin 666';
$p3->Telefono= 14141415;

$pro->ListProveedores[] = $p1;
$pro->ListProveedores[] = $p2;
$pro->ListProveedores[] = $p3;


$pro->MostrarDatos();