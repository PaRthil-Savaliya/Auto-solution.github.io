<?php
require('./fpdf184/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',20,6,35);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    $this->SetFillColor(180,180,255);
    $this->SetDrawColor(50,50,100);
    // Move to the right
    $this->Cell(50);
    // Title
    $this->Cell("0","15",'Auto Solution',0,1,'L');
    $this->Cell(50);
    $this->SetFont('Arial','B',10);
    $this->Cell("0","0",'parthilsavaliya@gmail.com',0,1,'L');
    $this->Cell(50);
    $this->SetFont('Arial','B',10);
    $this->Cell("0","9",'+91 7990553100',0,1,'L');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$q = "SELECT *
FROM cars
INNER JOIN payment
ON cars.Cid = payment.Cid";
 $pdf->SetFont('Arial','B',20);
$pdf->SetFillColor(255,191,0);
$pdf->SetDrawColor(50,50,100);
$pdf->Cell("70","15",'Selling Report :-',0,0,'C',true);
$pdf->SetFont('Arial','B',10);
$pdf->Cell("200","20", date("j / m / Y "),0,1,'C');
$pdf->Ln(5);
$pdf->SetFillColor(180,180,255);
$pdf->SetDrawColor(50,50,100);
$pdf->SetFont('Arial','I',10);
 $pdf->Cell("15","10",'Cid',0,0,'c',true);
 $pdf->Cell("30","10",'C_Name',0,0,'c',true);
 $pdf->Cell("20","10",'Price',0,0,'c',true);
 $pdf->Cell("15","10",'Fname',0,0,'c',true);
 $pdf->Cell("20","10",'Lname',0,0,'c',true);
 $pdf->Cell("45","10",'Email',0,0,'c',true);
 $pdf->Cell("25","10",'Mno',0,0,'c',true);
 $pdf->Cell("25","10",'Holder_name',0,1,'c',true);

$conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
$data = mysqli_query($conn,$q) or die("record not found");
while($row = mysqli_fetch_array($data)){
    $pdf->Cell("15","10",$row['Cid'],0,0,'c');
    $pdf->Cell("30","10",$row['Name'],0,0,'c');
    $pdf->Cell("20","10",$row['Price'],0,0,'c');
    $pdf->Cell("15","10",$row['Fname'],0,0,'c');
    $pdf->Cell("20","10",$row['Lname'],0,0,'c');
    $pdf->Cell("45","10",$row['Email'],0,0,'c');
    $pdf->Cell("25","10",$row['Mno'],0,0,'c');
    $pdf->Cell("35","10",$row['card_holder_nm'],0,1,'c');   
}
$file = 'selling_report'.time().'.pdf';
$pdf->Output($file,"D");
// $pdf->Output();
?>