<?php
require_once 'pdf/fpdf.php';

class GenerarReporte{

   private $pdf;

   public function __construct(){
      $this->pdf = new FPDF(); //instanciamos objeto de la clase FPDF
   }


   public function generar($nombre , $fechaA , $empresa , $documento , $tiempo){
      $this->pdf->AddPage(); //Agregamos la pagina
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->SetTitle('Lista de chequeo',true);

      /*Encabezado*/
      $this->pdf->SetFillColor(8,113,255);
      $this->pdf->SetTextColor(3,3,3);
      $this->pdf->Cell(190,10,'CHECK LIST',1,1,'C',true);

      $this->pdf->setXY(10,25);
      $this->pdf->Cell(43,5,'No Documento',1,1,'C',false);
      $this->pdf->setXY(53,25);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,5,utf8_decode($documento),1,1,'C',false); //Aqui ira el número de documento

      $this->pdf->setXY(103,25);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,5,'Hora/Fecha',1,1,'C',false);
      $this->pdf->setXY(146,25);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(54,5,utf8_decode($tiempo),1,1,'C',false); //Aqui ira la fecha de documento

      /*Datos del usuario*/
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,7,'Inspector',1,1,'C',false);
      $this->pdf->setXY(53,30);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(147,7,utf8_decode($nombre),1,1,'C',false); //Aqui ira el nombre completo del usuario
      $this->pdf->setXY(10,37);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,6,'Empresa',1,1,'C',false);
      $this->pdf->setXY(53,37);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,6,utf8_decode($empresa),'RB',1,'C',false); //Aqui ira la edad del usuario

      $this->pdf->setXY(103,37);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,6,'Fecha De Alta',1,1,'C',false);
      $this->pdf->setXY(140,37);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(60,6,utf8_decode($fechaA),'RB',1,'C',false); //Aqui ira la nacionalidad del usuario


      /*Cuerpo del documento*/
      $this->pdf->setXY(10,50);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,'1. Componentes usados',1,1,'L',false);

      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Los componentes usados son correctos?'),1,1,'',false);

      /*Caja de verificacion*/
      $this->pdf->setXY(150,57);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);

      $this->pdf->setXY(152,58.5);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(157,61.8 , 'SI');

      $this->pdf->setXY(165,58.5);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(170,61.8 , 'NO');

      $this->pdf->setXY(180,58.5);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(185,61.8 , 'N/A');

      /*Fin de codigo de caja de verificacion*/


      $this->pdf->setXY(10,64);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Se poseen los registros de recepción de los componentes?'),1,1,'',false);


      /*Caja de verificacion*/
      $this->pdf->setXY(150,64);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);


      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,65);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,68.3, 'SI');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,65);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,68.3 , 'NO');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,65);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185,68.3 , 'N/A');



      $this->pdf->setXY(10,71);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,'',1,1,'L',false);
      $this->pdf->text(12,76,utf8_decode('Código de los informes de recepción:'));

      /****************************
          APARTADO DOS
       *****************************/

      /*Cuerpo del documento*/
      $this->pdf->setXY(10,82);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,'2. Actividades realizadas',1,1,'L',false);

      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Se siguieron los procedimientos?'),1,1,'',false);

      /*Caja de verificacion*/
      $this->pdf->setXY(150,89);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);

      $this->pdf->setXY(152,90.7);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(157,94 , 'SI');

      $this->pdf->setXY(165,90.7);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(170,94 , 'NO');

      $this->pdf->setXY(180,90.7);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(4,4,'',1,1,'L',false);
      $this->pdf->text(185,94 , 'N/A');

      /*Fin de codigo de caja de verificacion*/
      $this->pdf->setXY(10,96);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Se usaron las revisiones vigentes de los procedimientos?'),1,1,'',false);


      // /*Caja de verificacion*/
      $this->pdf->setXY(150,96);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);


      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,97.3);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,100.5, 'SI');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,97.3);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,100.5 , 'NO');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,97.3);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185,100.5 , 'N/A');

      $this->pdf->setXY(10,103);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Se rellenaron los registros y estos son correctos?'),1,1,'',false);

      // /*Caja de verificacion*/
      $this->pdf->setXY(150,103);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,104);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,107.5, 'SI');
      //
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,104);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,107.5 , 'NO');
      //
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,104);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185,107.5 , 'N/A');

      $this->pdf->setXY(10,113);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,'3. Incidencias',1,1,'L',false);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Producto final conforme?'),1,1,'',false);

      $this->pdf->setXY(150,120);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,121.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,125, 'SI');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,121.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,125 , 'NO');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,121.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185,125 , 'N/A');

      $this->pdf->setXY(10,127);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Existe alguna incidencia relacionada?'),1,1,'',false);
      $this->pdf->setXY(150,127);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,128.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,131.8, 'SI');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,128.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,131.8 , 'NO');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,128.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185, 131.8, 'N/A');

      $this->pdf->setXY(10,134);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,utf8_decode('Código incidencias relacionadas:'),1,1,'',false);
      $this->pdf->setXY(62,130);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->write(15,'');


      $this->pdf->setXY(10,145);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,utf8_decode('4. Tiempos de producción'),1,1,'L',false);
      $this->pdf->setXY(10,152);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Existieron retrasos en la fabricación?'),1,1,'',false);
      $this->pdf->setXY(150,152);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,153.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,157, 'SI');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(165,153.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,157 , 'NO');

      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(180,153.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185, 157, 'N/A');

      $this->pdf->setXY(10,159);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Hubo máquinas indisponibles?'),1,1,'',false);
      $this->pdf->setXY(150,159);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->setXY(152,160.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,163.8, 'SI');

      $this->pdf->setXY(165,160.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,163.8 , 'NO');
      $this->pdf->setXY(180,160.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185, 163.8, 'N/P');


      $this->pdf->setXY(10,170);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(190,7,utf8_decode('5. Entrega y logística'),1,1,'L',false);
      $this->pdf->setXY(10,177);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Producto correctamente identificado?'),1,1,'',false);
      $this->pdf->setXY(150,177);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false);
      $this->pdf->setXY(152,178.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,181.8, 'SI');

      $this->pdf->setXY(165,178.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,181.8 , 'NO');
      $this->pdf->setXY(180,178.5);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185, 181.8, 'N/A');

      $this->pdf->setXY(10,184);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(140,7,utf8_decode('¿Producto conforme a las especificaciones del cliente?'),1,1,'',false);
      $this->pdf->setXY(150,184);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,7,'',1,1,'L',false); //cuadro principal

      $this->pdf->setXY(152,185.8);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(157,189, 'SI');

      $this->pdf->setXY(165,185.8);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(170,189 , 'NO');

      $this->pdf->setXY(180,185.8);
      $this->pdf->Cell(4,4,'',1,1,'L',false); //cuadros de relleno
      $this->pdf->text(185, 189, 'N/A');


      /****************
        OBSERVACIONES
       ******************/

       $this->pdf->setXY(10,196);
       $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
       $this->pdf->Cell(190,7,utf8_decode('Observaciones'),1,1,'L',false);
       $this->pdf->MultiCell(190,30,utf8_decode(''),1,'L',false);

       $this->pdf->SetFont('Arial','',8); //Le damos formato a nuestra fuente
       $this->pdf->write(5,'NOTA:   N/A = No aplicable.     N/P = No presenciado');

      $this->pdf->Output();
   }
}




 ?>
