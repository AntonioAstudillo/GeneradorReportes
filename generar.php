<?php


if(isset($_POST))
{
   require_once  'clase.php';

   $nombre = isset($_POST['nombre']) ? ucwords(strtolower($_POST['nombre'])) : 'NULO';
   $nombre .= isset($_POST['apellidoP']) ? ' ' . ucwords(strtolower($_POST['apellidoP'])) : 'NULO';
   $nombre .= isset($_POST['apellidoM']) ? ' ' . ucwords(strtolower($_POST['apellidoM'])) : 'NULO';
   $fecha = isset($_POST['fechaA']) ?  $_POST['fechaA'] : 'NULO';
   $tiempo = date('d/m/Y h:i:s a' , time());
   $documento = strtoupper($_POST['nombre'][0]).strtoupper($_POST['apellidoP'][0]).strtoupper($_POST['apellidoM'][0]).rand(1,getrandmax());
   $fecha = date_create($fecha);
   $fecha = date_format($fecha,'d/m/Y');


   if(isset($_POST['empresas']))
   {

      switch($_POST['empresas'])
      {
         case 1:
            $empresa = 'Banein';
         break;
         case 2:
            $empresa = 'Chorizos DM Toluca';
         break;
         case 3:
            $empresa = 'Fénix Farms';
         break;
         case 4:
            $empresa = 'Gracia Bolsos';
         break;
         case 5:
            $empresa = 'Abeja Reyna';
         break;

      }
   }

   $objeto = new GenerarReporte();
   $objeto->generar($nombre , $fecha , $empresa , $documento , $tiempo);

}


?>
