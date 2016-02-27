<?php
//var_dump($data_quotations); die;
$dataprivileges = $this->privileges->main($this->session->userdata['users_idrole']);

$pdf = new PDF();
$pdf->FPDF('P', 'cm', 'A4');
$pdf->SetMargins(1, 1, 1);

$pdf->AddPage();
$pdf->SetFont('Times', '', 10);
$pdf->Cell(6, 3, '', 1, 'LR', 'L');
$pdf->SetFont('Times', 'B', 18);
$pdf->Cell(8, 3, 'QUOTATION', 1, 'LR', 'C');
$pdf->SetFont('Courier', '', 10);
$pdf->MultiCell(5, 1.5, $data_quotations[0]->prospects_createddate, 1, 'R');
$pdf->SetXY(15, 2.5);
$pdf->MultiCell(5, 1.5, $data_quotations[0]->prospects_quotationno, 'BR', 'R');
$pdf->SetXY(1.1, 1.1);
$pdf->Image($data_quotations[0]->companies_logo, null, null, 5.8, 2.8, 'JPG');

$gender = '';
if ($data_customercp[0]->customercp_gender == 'Male') : $gender = 'Mr. ';
else : $gender = 'Mrs. ';
endif;
$pdf->Ln(1);
$pdf->SetFont('Times', '', 10);
$pdf->Cell(0, 0, 'To :', 0, 0, 'L');
$pdf->Ln(0.5);
$pdf->Cell(0, 0, $gender . $data_customercp[0]->customercp_firstname . ' ' . $data_customercp[0]->customercp_lastname, 0, 0, 'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 0, $data_quotations[0]->customers_name, 0, 0, 'L');
$pdf->Ln(0.5);
$pdf->SetFont('Times', '', 10);
$pdf->Cell(0, 0, $data_quotations[0]->customers_address, 0, 0, 'L');
$pdf->Ln(0.5);
$pdf->Cell(0, 0, $data_quotations[0]->cities_name . ', ' . $data_quotations[0]->countries_name . '. ' . $data_quotations[0]->customers_postalcode, 0, 0, 'L');
$pdf->Ln(0.5);
$pdf->SetFillColor(200,200,200);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(11, 1, $data_quotations[0]->products_name, 1, 0, 'C',true);
$pdf->Cell(8, 1, 'Price', 1, 0, 'C',true);
$pdf->Ln(1);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C',true);
$pdf->Cell(8.5, 0.8, 'Description', 1, 0, 'C',true);
$pdf->Cell(1.5, 0.8, 'Quantity', 1, 0, 'C',true);
$pdf->Cell(4, 0.8, 'Unit Price', 1, 0, 'C',true);
$pdf->Cell(4, 0.8, 'Total Price', 1, 0, 'C',true);
$pdf->SetFillColor(255);
$pdf->Ln(0.8);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(1, 0, '1', 1, 0, 'C',true);
//$this->fpdf->Cell(10, 0, utf8_decode($data_quotations[0]->products_specification), 1, 0, 'C',true);
$pdf->Cell(10, 0, $pdf->WriteHTML($data_quotations[0]->products_specification), 1, 0, 'C',true);


$pdf->Output('Quotation-'.$data_quotations[0]->prospects_id.'.pdf', 'I');

//$data = $data_quotations[0];
//class PDF extends FPDF {
//
////    private $data_quotations = array();
////    private $data_prospectaccessories = array();
////    private $data_customercp = array();
////    private $data_productprices = array();
////
////    function __constructdata_quotations($data_quotations = array()) {
////        parent::__constructdata_quotations();
////        $this->data = $data_quotations;
////    }
////    
////    function __constructdata_prospectaccessories($data_prospectaccessories = array()) {
////        parent::__constructdata_prospectaccessories();
////        $this->data = $data_prospectaccessories;
////    }
////    
////    function __constructdata_customercp($data_customercp = array()) {
////        parent::__constructdata_customercp();
////        $this->data = $data_customercp;
////    }
////    
////    function __constructdata_productprices($data_productprices = array()) {
////        parent::__constructdata_productprices();
////        $this->data = $data_productprices;
////    }
//
//
//    // Page header
//    function Header($logopicture) {
//        $this->Image($logopicture , 7, 5, 50);
//        $this->SetFont('Arial', '', 10);
//        $this->Cell(200, 15, '', 0, 3, 'P');
//    }
//
//    // Page footer
//    function Footer() {
//        // Position at 1.5 cm from bottom
//        $this->SetY(-15);
//        // Arial italic 8
//        $this->SetFont('Arial', 'I', 8);
//        // Page number
//        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
//    }
//
//    public function printPDF($data_quotations, $data_prospectaccessories, $data_customercp, $data_productprices) {
//        $this->SetAutoPageBreak(false);
//        $this->AliasNbPages();
//        $this->SetFont("Arial", "", 8);
//
//        //$this->rptDetailData($data_quotations, $data_prospectaccessories, $data_customercp, $data_productprices);
//    }
//
//    public function rptDetailData($data_quotations, $data_prospectaccessories, $data_customercp, $data_productprices) {
//        $ci = get_instance();
//        $ci->load->library('roman');
//        $border = 0;
//        $this->SetAutoPageBreak(true, 20);
//        // change perpindahan pagenya, jarak potongnya
//        $this->AliasNbPages();
//        $left = 25;
//
//
//        $this->SetFont('Arial', '', 12);
//        $this->Cell(121, 4, 'QUOTATION', 0, 10, 'P');
//        $this->Cell(150, 4, '', 0, 10, 'P');
//
//        $this->SetFont('Arial', '', 8);
//        $this->Cell(121, 4, 'To :', 0, 0, 'P');
//        $left = $this->GetX();
//        $leftadd = $this->GetX();
//
//        //tempat nomor surat
//
//        $tgl = substr($data_quotations->prospects_createddate, 8, 2);
//        $bln = substr($data_quotations->prospects_createddate, 5, 2);
//        $thn = substr($data_quotations->prospects_createddate, 0, 4);
//        $tgl2 = $ci->roman->rome($tgl);
//        $bln2 = $ci->roman->rome($bln);
//        $thn2 = $ci->roman->rome($thn);
//        $createdatefix = $bln2 . '-' . $thn;
//
//        $this->SetX($leftadd += 58);
//        $this->Cell(10, 4, $data->prospects_quotationno . '/' . $data->companies_code . '/' . $data->branches_id . '-' . $data->users_lastname . '/' . $createdatefix, 0, 0, 'R');
//
//
////        $this->Cell(150, 4, 'LEADS ID', 0, 1, 'R');
////
////        $this->Cell(121, 4, $data->customers_name, 0, 0, 'P');
////        $this->Cell(150, 4, 'SUSPECT ID', 0, 1, 'R');
////
////        $this->Cell(121, 4, $data->customers_address, 0, 0, 'P');
////
////        $today = date("d/m/Y"); // example output: 01/01/1970
////        $left = $this->GetX();
////        $leftadd = $this->GetX();
////        $this->SetX($leftadd += 58);
////        $this->Cell(10, 4, $today, 0, 0, 'R');
////
////        $this->Cell(150, 4, 'PROSPECT ID', 0, 1, 'R');
////        $this->Cell(121, 4, 'Attn: ' . $data->customercp_firstname, 0, 25, 'P');
////        $this->Cell(150, 4, '', 0, 25, 'P');
////
////
////
////        $h = 10;
////        $left = 40;
////        $top = 300;
////        #tableheader
////        $this->SetFillColor(200, 200, 200);
////        $left = $this->GetX();
////        $this->Cell(120, $h, $data->products_name, 1, 0, 'C', true);
////        $this->SetX($left += 120);
////        $this->Cell(70, $h, 'Price', 1, 1, 'C', true);
////        $leftadd = $this->GetX();
////
////        $this->Cell(10, $h, 'No', 1, 0, 'C', true);
////        $this->SetX($leftadd += 10);
////        $this->Cell(90, $h, 'Description', 1, 0, 'C', true);
////        $this->SetX($leftadd += 90);
////        $this->Cell(20, $h, 'Quantity', 1, 0, 'C', true);
////        $this->SetX($leftadd += 20);
////        $this->Cell(35, $h, 'Unit Price', 1, 0, 'C', true);
////        $this->SetX($leftadd += 35);
////        $this->Cell(35, $h, 'Total Price', 1, 1, 'C', true);
////
////        //$this->Ln(20);
////
////        $this->SetFont('Arial', '', 8);
////        $this->SetWidths(array(10, 90, 20, 35, 35));
////        $this->SetAligns(array('C', 'L', 'C', 'C', 'R', 'C', 'C', 'R', 'C', 'R'));
////        $no = 1;
////        $this->SetFillColor(255);
////
////        // for product
////        $this->Row(
////                array($no++,
////                    $data->products_specification,
////                    number_format($data->prospects_quantity),
////                    number_format($data->productprices_listprice) . " / " . $data->prospects_uom,
////                    number_format($data->productprices_listprice) * $data->prospects_quantity)
////        );
////
////        // for accesories
////        $accr = 0;
////        foreach ($data as $baris) {
////            $this->Row(
////                    array($no++,
////                        utf8_decode($baris->products_specification),
////                        number_format($baris->prospects_quantity),
////                        //$baris['PROSPECTIDA']."/".$baris['ACT_CODE'],
////                        number_format($baris->accessories_price),
////                        number_format($baris->accessories_price * $baris->prospects_quantity)
////            ));
////            $accr = $accr + ($baris->accessories_price * $baris->prospects_quantity);
////        }
////        $prod = 0;
////        $prod = $prod + ($data->productprices_listprice * $data->prospects_quantity);
////        $this->totalamount = $prod + $accr;
////
////
////        $leftdrop = $this->GetX();
////        $this->SetX($leftdrop += 120);
////        $this->SetFillColor(200, 200, 200);
////        $this->Cell(35, 4, 'Total', 1, 0, 'C');
////        $this->Cell(35, 4, number_format($this->totalamount), 1, 0, 'R');
////        $this->SetFont('Arial', '', 6);
////        $this->Ln(5);
////        $this->Cell(51, 2, 'PRICE PER-UNIT', 0, 0, 'P');
////        $this->Cell(150, 2, $data->prospects_note1, 0, 1, 'P');
////        $this->Cell(51, 2, 'DELIVERY', 0, 0, 'P');
////        $this->Cell(150, 2, $data->prospects_note2, 0, 1, 'P');
////        $this->Cell(51, 2, 'PAYMENT', 0, 0, 'P');
////        $this->Cell(150, 2, $data->prospects_note3, 0, 1, 'P');
////        $this->Cell(51, 2, 'WARRANTY', 0, 0, 'P');
////        $this->Cell(150, 2, $data->prospects_note4, 0, 1, 'P');
////        $this->Cell(51, 2, 'VALIDITY', 0, 0, 'P');
////        $this->Cell(150, 2, $data->prospects_note5, 0, 1, 'P');
////        $this->SetFont('Arial', '', 8);
////        $this->Ln(5);
////
////        $this->Cell(330, 4, 'Very truly yours,', '', 1, 'C');
////        $this->Cell(330, 4, $data->companies_name, '', 1, 'C');
////        $this->Ln(25);
////        $this->Cell(330, 4, $data->prospects_createdby, '', 1, 'C');
////        //'Hp. 0823.9630.7017'
////        $this->Cell(330, 4, $data->users_mobile, '', 1, 'C');
////        //pery.rahmansah@ipps.co.id
////        $this->Cell(330, 4, $data->users_email, '', 1, 'C');
////
////        $lastY = $this->GetY();
////        if ($lastY > 100) {
////            $this->AddPage($this->CurOrientation);
////        }
//        //$this->Ln(5);
//        //$this->Cell(130,4,'Very truly yours,','',0,'C');
//        //$this->Cell(130,4,'Approved by','',0,'C');
//        //$this->Ln(20);
//        //$this->Cell(130,4,$this->approved,'',0,'C');
//        //$this->Cell(130,4,'EID/OIY James Cowcher','',0,'C');
//    }
//
//    private $widths;
//    private $aligns;
//
//    function SetWidths($w) {
//        //Set the array of column widths
//        $this->widths = $w;
//    }
//
//    function SetAligns($a) {
//        //Set the array of column alignments
//        $this->aligns = $a;
//    }
//
//    function Row($data) {
//        //Calculate the height of the row
//        $nb = 0;
//        for ($i = 0; $i < count($data); $i++)
//            $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
//        $h = 5 * $nb;
//        //Issue a page break first if needed
//        $this->CheckPageBreak($h);
//        //Draw the cells of the row
//        for ($i = 0; $i < count($data); $i++) {
//            $w = $this->widths[$i];
//            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'P';
//            //Save the current position
//            $x = $this->GetX();
//            $y = $this->GetY();
//            //Draw the border
//            $this->Rect($x, $y, $w, $h);
//            //Print the text
//            $this->MultiCell($w, 5, $data[$i], 0, $a);
//            //Put the position to the right of the cell
//            $this->SetXY($x + $w, $y);
//        }
//        //Go to the next line
//        $this->Ln($h);
//    }
//
//    function CheckPageBreak($h) {
//        //If the height h would cause an overflow, add a new page immediately
//        if ($this->GetY() + $h > $this->PageBreakTrigger)
//            $this->AddPage($this->CurOrientation);
//    }
//
//    function NbLines($w, $txt) {
//        //Computes the number of lines a MultiCell of width w will take
//        $cw = &$this->CurrentFont['cw'];
//        if ($w == 0)
//            $w = $this->w - $this->rMargin - $this->x;
//        $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
//        $s = str_replace("\r", '', $txt);
//        $nb = strlen($s);
//        if ($nb > 0 and $s[$nb - 1] == "\n")
//            $nb--;
//        $sep = -1;
//        $i = 0;
//        $j = 0;
//        $l = 0;
//        $nl = 1;
//        while ($i < $nb) {
//            $c = $s[$i];
//            if ($c == "\n") {
//                $i++;
//                $sep = -1;
//                $j = $i;
//                $l = 0;
//                $nl++;
//                continue;
//            }
//            if ($c == ' ')
//                $sep = $i;
//            $l+=$cw[$c];
//            if ($l > $wmax) {
//                if ($sep == -1) {
//                    if ($i == $j)
//                        $i++;
//                } else
//                    $i = $sep + 1;
//                $sep = -1;
//                $j = $i;
//                $l = 0;
//                $nl++;
//            } else
//                $i++;
//        }
//        return $nl;
//    }
//
//}
//
//// Instanciation of inherited class
//$pdf = new PDF('P', 'mm', 'A4');
//$pdf->AliasNbPages();
//$logopicture = 'assets/pictures/companies/CCI.jpg';
//$pdf->Header($logopicture);
////variable global
////$pdf->totalamount = 0;
////$pdf->no = $data->prospects_id;
//////$pdf->prepared = $quotation[0]['CUSTOMERNAME'];
//////$pdf->approved = $quotation[0]['CUSTOMERNAME'];
////$pdf->prospects_id = $data->prospects_id;
////$pdf->date = $data->prospects_id;
////$pdf->charge = $data->prospects_id;
////$pdf->year = substr($data->prospects_id, -2);
////$pdf->week = $data->prospects_id;
//$pdf->AddPage("P", 'A4');
//
//$pdf->SetFont('Arial', 'B', 12);
//$pdf->Ln(4);
////$pdf->Cell(0,4,'Quotation Detail '.$pdf->PROSPECTIDA.' '.$pdf->charge.' '.$pdf->week.''.$pdf->year,'',0,'C');
//$pdf->Ln(10);
//
////$pdf->printPDF($data_quotations, $data_prospectaccessories, $data_customercp, $data_productprices);
//
//$pdf->Output();
?>