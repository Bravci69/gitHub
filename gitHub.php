<?php
// Include the FPDF library
require('fpdf.php');

// Create instance of the FPDF class
$pdf = new FPDF();
$pdf->AddPage();

// Set the font for the document
$pdf->SetFont('Arial', 'B', 16);

// Add some content
$pdf->Cell(40, 10, 'Hello, this is a PDF generated using FPDF!');

// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I'); // 'I' to display in the browser, 'D' to download
?>
