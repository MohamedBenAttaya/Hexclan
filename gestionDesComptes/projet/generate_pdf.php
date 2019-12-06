
<?php
//include connection file 
include_once("C:/wamp64/www/projet/config.php");
include_once('C:/wamp64/www/projet/fpdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('C:/wamp64/www/projet/views/assets/img/asahi-logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Liste Client',1,0,'C');
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
 
$dbConnection = mysqli_connect('localhost', 'root', '', 'projet');

$query  = "SELECT * FROM client";
$result = mysqli_query($dbConnection, $query);
$e=0;
$i=0;
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
if (mysqli_num_rows($result) > 0) {
    $pdf->Cell(24,10,"Id client",1,0);
  
    $pdf->Cell(40,10,"Nom",1,0);
   // $pdf->Cell(30,10,"Telephone",1,0);
    $pdf->Cell(65,10,"Email",1,0);
    $pdf->Cell(60,10,"Adresse",1,1);
  
  
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  
          $id_client = $row['id_client'];
  
          $nom = $row['nom'];
          //$telephone = $row['telephone'];
          $email=$row['email'];
          $adresse=$row['adresse'];
          
          if($e==0)
          {
  
          $pdf->Cell(24,10,"{$id_client} ",1,0);
  
          $pdf->Cell(40,10,"{$nom} ",1,0);
          //$pdf->Cell(30,10,"{$telephone} ",1,0);
          $pdf->Cell(65,10,"{$email} ",1,0);
          $pdf->Cell(60,10,"{$adresse} ",1,1);
  
  
          }
  
  
  
      } }
$pdf->Output();
?>