<?php
class Producto
{

public $Id;
public $Nombre;
public $Codigo;
public $Precio;
public $Marca;
public $ListProveedores = array();

public function MostrarDatos()
{
    echo '------------------------------------------------------------------- <br>' ;
    echo 'datos del producto<br>' ;
    echo '------------------------------------------------------------------- <br>' ;


echo 'este es el id del producto' . $this->Id  .  '<br>';
echo 'este es el Nombre del producto' . $this->Nombre  .  '<br>';
echo 'este es el codigo del producto' . $this->Codigo  .  '<br>';
echo 'este es el precio del producto' . $this->Precio  .  '<br>';
echo 'este es la Marca del producto' . $this->Marca  .  '<br>';

echo '------------------------------------------------------------------- <br>' ;
echo 'datos de los proveedores <br>' ;
echo '------------------------------------------------------------------- <br>' ;



foreach ($this->ListProveedores as $p) {
echo $p->Id . 'este es el id del proveedor' .  '<br>';
echo $p->Nombre . 'este es el nombre  del proveedor' .  '<br>';
echo $p->Cuil . 'este es el cuil del proveedor' .  '<br>';
echo $p->Direccion . 'este es el direccion del proveedor' .  '<br>';
echo $p->Telefono . 'este es el telefono del proveedor' .  '<br>';
echo '------------------------------------------------------------------- <br>' ;
echo '------------------------------------------------------------------- <br>' ;



}
}

}