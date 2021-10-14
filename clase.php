<?php
require_once 'pdf/fpdf.php';

class GenerarReporte{

   private $pdf;


   public function __construct(){
      $this->pdf = new FPDF(); //instanciamos objeto de la clase FPDF
   }

   public function generar(){
      $this->pdf->AddPage(); //Agregamos la pagina
      $this->pdf->SetFont('Arial','B',16); //Le damos formato a nuestra fuente

      /*Encabezado*/
      $this->pdf->SetFillColor(8,113,255);
      $this->pdf->SetTextColor(3,3,3);
      $this->pdf->Cell(190,10,'CHECK LIST USUARIOS REGISTRADOS',1,1,'C',true);


      $this->pdf->Cell(43,10,'No Documento',1,1,'C',false);
      $this->pdf->setXY(53,20);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,10,'asdassad','RB',1,'C',false); //Aqui ira el número de documento

      $this->pdf->setXY(103,20);
      $this->pdf->SetFont('Arial','B',16); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,10,'Fecha',1,1,'C',false);
      $this->pdf->setXY(140,20);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(60,10,'','RB',1,'C',false); //Aqui ira la fecha de documento

      /*Datos del usuario*/
      $this->pdf->SetFont('Arial','B',16); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,10,'Nombre',1,1,'C',false);
      $this->pdf->setXY(52,30);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(148,10,'','RB',1,'C',false); //Aqui ira el nombre completo del usuario

      $this->pdf->SetFont('Arial','B',16); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,10,'Edad',1,1,'C',false);
      $this->pdf->setXY(53,40);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(50,10,'','RB',1,'C',false); //Aqui ira la edad del usuario

      $this->pdf->setXY(103,40);
      $this->pdf->SetFont('Arial','B',16); //Le damos formato a nuestra fuente
      $this->pdf->Cell(43,10,'Nacionalidad',1,1,'C',false);
      $this->pdf->setXY(140,40);
      $this->pdf->SetFont('Arial','',10); //Le damos formato a nuestra fuente
      $this->pdf->Cell(60,10,'','RB',1,'C',false); //Aqui ira la nacionalidad del usuario

      $this->pdf->Output();
   }
}




 ?>
