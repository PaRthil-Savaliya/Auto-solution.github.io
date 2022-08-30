<?php
require('./fpdf184/fpdf.php');


//customer and invoice details


class PDF extends FPDF
{
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
  
  function body(){
    $Cid = $_GET['Cid'];
    $q = "SELECT *
    FROM cars
    INNER JOIN payment
    ON cars.Cid = payment.Cid and cars.Cid = $Cid";
      $conn = mysqli_connect("localhost","root","","autosolution") or die("connection failed");
      $data = mysqli_query($conn,$q) or die("record not found");
      while($row = mysqli_fetch_array($data)){
    //Billing Details
    $this->SetY(55);
    $this->SetX(10);
    $this->SetFont('Arial','B',12);
    $this->Cell(50,10,"Bill To: ",0,1);
    $this->SetFont('Arial','',12);
    $this->Cell(50,7,'Name :-   '.$row['Fname'].$row['Lname'],0,1);
    $this->Cell(50,7,'Email :-   '.$row['Email'],0,1);
    $this->Cell(50,7,'Mobile :-  '.$row['Mno'],0,1);
    
    //Display Invoice no
    $this->SetY(55);
    $this->SetX(-60);
    $this->Cell(50,7,"Invoice No : ".Rand(1,50));
    
    //Display Invoice date
    $this->SetY(63);
    $this->SetX(-60);
    $this->Cell(50,7,"Invoice Date : ".date("j / m / Y "));
    
    //Display Table headings
    $this->SetY(95);
    $this->SetX(10);
    $this->SetFont('Arial','B',12);
    
    $this->Cell(50,9,"DESCRIPTION",1,0);
    $this->Cell(30,9,"Brand",1,0,"C");
    $this->Cell(40,9,"PRICE",1,0,"C");
    $this->Cell(30,9,"Model",1,0,"C");
    $this->Cell(40,9,"TOTAL",1,1,"C");
    $this->SetFont('Arial','',12);
    
    //Display table product rows
  
      $this->Cell(50,9,$row["Name"] . "  " . $row['Specification'],"LR",0);
      $this->Cell(30,9,$row["Brand"],"R",0,"R");
      $this->Cell(40,9,$row["Price"],"R",0,"R");
      $this->Cell(30,9,$row["Model"],"R",0,"C");
      $this->Cell(40,9,$row["Price"],"R",1,"R");

    //Display table total row
    $this->SetFont('Arial','B',12);
    $this->Cell(150,9,"TOTAL",1,0,"R");
    $this->Cell(40,9,$row['Price'],1,1,"R");
    
  
        }
  }
  function Footer(){
    
    //set footer position
    $this->SetY(-50);
    $this->SetFont('Arial','B',12);
    $this->Cell(0,10,"For Auto Solution",0,1,"R");
    $this->Ln(15);
    $this->SetFont('Arial','',12);
    $this->Cell(0,10,"Authorized Signature",0,1,"R");
    $this->SetFont('Arial','',10);
    
    //Display Footer Text
    $this->Cell(0,10,"This is a computer generated invoice",0,1,"C");
    
  }
  
}
//Create A4 Page with Portrait 
$pdf=new PDF("P","mm","A4");
$pdf->AddPage();
$pdf->body();
$file = 'INVOICE'.time().'.pdf';
$pdf->Output($file,"D");
?>
