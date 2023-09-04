<?php
require_once('resources/tcpdf/tcpdf.php');
require_once('resources/fpdf/fpdf.php');
require_once('resources/vendor/autoload.php');

use setasign\Fpdi\Fpdi;
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $id = $_GET['id'];

} else {
    echo "Name or ID parameter not found.";
}
$date = date('F d,Y');

$pdf = new Fpdi();

// Set the existing PDF certificate template file
$templateFile = 'ct.pdf';

// Import the template page
$pageCount = $pdf->setSourceFile($templateFile);
$templatePage = $pdf->importPage(1);

// Set the size of the imported template page
$size = $pdf->getTemplateSize($templatePage);
$width = $size['width'];
$height = $size['height'];

// Add a new page with the same size as the template
$pdf->AddPage('L', array($width, $height));
$pdf->useTemplate($templatePage);

// Set the font, font size, and position for the name
$pdf->AddFont('brushscript', '', 'brushscript.php');
$pdf->SetFont('brushscript','', 42);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(1, 120);
$pdf->Cell(0, 0, $name, 0, 1, 'C');

// Set the font, font size, and position for the date
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(60, 170);
$pdf->Cell(0, 0, $date, 0, 1, 'L');

$filename = $_GET['name'] . '_' . $_GET['id'] . '.pdf';

// Save the certificate file on the server
$pdf->Output('../admin/certificates/' . $filename, 'F');
header("Location: donorpend.php");
exit;

?>
