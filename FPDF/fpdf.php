<?php

require_once 'lib/fpdf/fpdf.php';

class PDF extends FPDF {

    function Header() {                                  // http://fpdf.org/en/doc/header.htm
        $this->Rect(5, 5, 200, 287, 'D');                // http://www.fpdf.org/en/doc/rect.htm
        $this->Image('logo.png', 15, 10, 60);          // http://fpdf.org/en/doc/image.htm
        $this->SetFont("Helvetica", "", "13px");
        $this->Cell(0, 5, "novaoneclicksolution@gmail.com", "c", 1, "R");
        $this->Cell(0, 9, "+91 777 9092 666", "c", 1, "R");
        $title = "3rd Floor, Vrundavan Complex, Near Jantanagar Soc., Rachana Circle, Varachha, Surat - 395006.";

        $w = $this->GetStringWidth($title) + 6;
        $this->SetFont("arial", "", "11px");
        $this->SetDrawColor(0, 109, 51);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetLineWidth(0.5);
        $this->SetY(45);
        $this->Cell(0, 7, $title, 1, 1, 'C', true);         // http://fpdf.org/en/doc/cell.htm
        $this->Ln(10);                                      // http://fpdf.org/en/doc/ln.htm
    }
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Helvetica',"","13px");
        $this->Cell(0, 7,"Srudent Signature", '',0, 'L');
        $this->Cell(0, 7,"Nova One Click Solution", '', 1, 'R');
        $this->Cell(148, -65,"For,", '', 1, 'R');
        $this->SetDrawColor(0, 109, 51);
        $this->SetLineWidth(0.5);
        $this->Line(10,250,200,250);
    }

}

$pdf = new PDF();                          // http://fpdf.org/en/doc/__construct.htm

$pdf->AddPage("P", "A4", 0);                  // http://fpdf.org/en/doc/addpage.htm

$pdf->SetFont("arial", "", "13px");         // http://fpdf.org/en/doc/setfont.htm

$header=array("eno","ename","salary","city");
$data=array(array(1,"vishalsdgsd",1000,"surat"),array(1,"vishal",1000,"surat"),array(1,"vishal",1000,"surat"));
foreach($header as $col)
    $pdf->Cell(40,7,$col,1);
    $pdf->Ln();
    foreach($data as $row)
    {
        foreach($row as $col)
            $pdf->Cell(40,6,$col,"LR",0);
        $pdf->Ln();
    }
    $pdf->Cell(160,0,'','T');
    $pdf->Ln(10);
    
$pdf->Output();
?>