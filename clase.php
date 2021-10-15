<?php
require_once 'pdf/fpdf.php';

class GenerarReporte{

   private $pdf;

   public function __construct(){
      $this->pdf = new FPDF(); //instanciamos objeto de la clase FPDF
   }

   //$nombre , $fechaN , $edad , $nacionalidad
   public function generar(){
      $this->pdf->AddPage(); //Agregamos la pagina
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente

      /*Encabezado*/
      $this->pdf->SetFillColor(8,113,255);
      $this->pdf->SetTextColor(3,3,3);
      $this->pdf->Cell(190,10,'CHECK LIST ALUMNOS',1,1,'C',true);

      $this->pdf->setXY(10,25);
      $this->pdf->Cell(43,5,'No Documento',1,1,'C',false);
      $this->pdf->setXY(53,25);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,5,'AJ0481851',1,1,'C',false); //Aqui ira el número de documento

      $this->pdf->setXY(103,25);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,5,'Fecha',1,1,'C',false);
      $this->pdf->setXY(146,25);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(54,5,'14/10/2021',1,1,'C',false); //Aqui ira la fecha de documento

      /*Datos del usuario*/
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,7,'Nombre',1,1,'C',false);
      $this->pdf->setXY(53,30);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(147,7,utf8_decode('Jesus Antonio Astudillo Jaimes'),1,1,'C',false); //Aqui ira el nombre completo del usuario
      $this->pdf->setXY(10,37);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,6,'Carrera',1,1,'C',false);
      $this->pdf->setXY(53,37);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,6,utf8_decode('Computación'),'RB',1,'C',false); //Aqui ira la edad del usuario

      $this->pdf->setXY(103,37);
      $this->pdf->SetFont('Arial','B',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,6,'Fecha De Nacimiento',1,1,'C',false);
      $this->pdf->setXY(140,37);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(60,6,'29/12/1994','RB',1,'C',false); //Aqui ira la nacionalidad del usuario


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
      $this->pdf->write(15,'Que onda wei como estas codigo y881881');







      $this->pdf->Output();
   }
}




 ?>
