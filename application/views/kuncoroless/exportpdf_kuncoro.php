<?php
	require('assets/fpdf/fpdf.php');
	class PDF extends FPDF
	{
		private $quotation = array();
		private $accesorieschoosed = array();

		function __construct($quotation = array()) {
	    	parent::__construct();
	    	$this->data = $quotation;
		}

		function __constructaccesorieschoosed($accesorieschoosed = array()) {
	    	parent::__constructaccesorieschoosed();
	    	$this->data = $accesorieschoosed;
		}

		// Page header
		function Header()
		{
		    $this->Image('assets/img/logo/INTA.jpg',7,5,50);
		    $this->SetFont('Arial','',10);
		    $this->Cell(200,15,'',0,3,'P');


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

		public function printPDF ($quotation) {	 
		    $this->SetAutoPageBreak(false);
		    $this->AliasNbPages();
		    $this->SetFont("Arial", "", 8);
	 
		    $this->rptDetailData($quotation);
	  	}

	  	public function rptDetailData ($quotation) {
			$ci = get_instance();
			$ci->load->library('roman');
			$border = 0;
			$this->SetAutoPageBreak(true,20);
                        // change perpindahan pagenya, jarak potongnya
			$this->AliasNbPages();
			$left = 25;


		        $this->SetFont('Arial','',12);
		        $this->Cell(121,4,'QUOTATION',0,10,'P');
		        $this->Cell(150,4,'',0,10,'P');
		       
				$this->SetFont('Arial','',8);	 
		        $this->Cell(121,4,'To :',0,0,'P');
				$left = $this->GetX();
				$leftadd = $this->GetX();
				
				//tempat nomor surat
				
				$tgl = substr($quotation[0]['CREATEDATE'],8,2);
				$bln = substr($quotation[0]['CREATEDATE'],5,2);
				$thn = substr($quotation[0]['CREATEDATE'],0,4);
				$tgl2 = $ci->roman->rome($tgl);
				$bln2 = $ci->roman->rome($bln);
				$thn2 = $ci->roman->rome($thn);
				$createdatefix = $bln2.'-'.$thn;
				
				$this->SetX($leftadd += 58); $this->Cell(10, 4, $quotation[0]['QUOTATIONNO'].'/'.$quotation[0]['COMPANY'].'/'.$quotation[0]['BRANCH_ID'].'-'.$quotation[0]['SALESNAME'].'/'.$createdatefix, 0, 0, 'R');
				
				
				$this->Cell(150,4,'LEADS ID',0,1,'R');
		        
		        $this->Cell(121,4,$quotation[0]['CUSTOMERNAME'],0,0,'P');
		        $this->Cell(150,4,'SUSPECT ID',0,1,'R');
		        
				$this->Cell(121,4,$quotation[0]['ADDRESS1'],0,0,'P');
				
				$today = date("d/m/Y"); // example output: 01/01/1970
				$left = $this->GetX();
				$leftadd = $this->GetX();
				$this->SetX($leftadd += 58); $this->Cell(10, 4, $today, 0, 0, 'R');
		        
				$this->Cell(150,4,'PROSPECT ID',0,1,'R');
		        $this->Cell(121,4,'Attn: '.$quotation[0]['CONTACTNAME'],0,25,'P');
		        $this->Cell(150,4,'',0,25,'P');



			$h = 10;
			$left = 40;
			$top = 300;
			#tableheader
			$this->SetFillColor(200,200,200);
			$left = $this->GetX();
			$this->Cell(120, $h, $quotation[0]['PRODUCTNAME'], 1, 0, 'C',true);
			$this->SetX($left += 120); $this->Cell(70, $h, 'Price', 1, 1, 'C',true);
			$leftadd = $this->GetX();

			$this->Cell(10,$h,'No',1,0,'C',true);
			$this->SetX($leftadd += 10); $this->Cell(90, $h, 'Description', 1, 0, 'C',true);
			$this->SetX($leftadd += 90); $this->Cell(20, $h, 'Quantity', 1, 0, 'C',true);
			$this->SetX($leftadd += 20); $this->Cell(35, $h, 'Unit Price', 1, 0, 'C',true);
			$this->SetX($leftadd += 35); $this->Cell(35, $h, 'Total Price', 1, 1, 'C',true);
			
			//$this->Ln(20);

			$this->SetFont('Arial','',8);
			$this->SetWidths(array(10,90,20,35,35));
			$this->SetAligns(array('C','L','C','C','R','C','C','R','C','R'));
			$no = 1; $this->SetFillColor(255);

                        // for product
			$this->Row(
					array($no++,
					$quotation[0]['SPECIFICATION'],
					number_format($quotation[0]['QUANTITY']),
					number_format($quotation[0]['UNITVALUE'])." / ".$quotation[0]['UOM'],
					number_format($quotation[0]['UNITVALUE']*$quotation[0]['QUANTITY'])
				));

                        // for accesories
						$accr = 0;
			foreach ($quotation as $baris) {
				$this->Row(
					array($no++,
					utf8_decode($baris['ASSSPEC']),
					number_format($baris['ASSQUANTITY']),
					//$baris['PROSPECTIDA']."/".$baris['ACT_CODE'],
					number_format($baris['ASSUNITVALUE']),
					number_format($baris['ASSUNITVALUE']*$baris['ASSQUANTITY'])
				));
				$accr = $accr + ($baris['ASSUNITVALUE']*$baris['ASSQUANTITY']);
				
			}
			$prod = 0;
			$prod = $prod + ($quotation[0]['UNITVALUE']*$quotation[0]['QUANTITY']);
			$this->totalamount = $prod + $accr;
			
			
			$leftdrop = $this->GetX();
			$this->SetX($leftdrop += 120);
			$this->SetFillColor(200,200,200);
			$this->Cell(35,4,'Total',1,0,'C');
			$this->Cell(35,4,number_format($this->totalamount),1,0,'R');
		        $this->SetFont('Arial','',6);	
	 		$this->Ln(5);
		        $this->Cell(51,2,'PRICE PER-UNIT',0,0,'P');
		        $this->Cell(150,2,$quotation[0]['PRICEUNITNOTES'],0,1,'P'); 
		        $this->Cell(51,2,'DELIVERY',0,0,'P');
		        $this->Cell(150,2,$quotation[0]['DELIVERYNOTES'],0,1,'P'); 
		        $this->Cell(51,2,'PAYMENT',0,0,'P');
		        $this->Cell(150,2,$quotation[0]['PAYMENTNOTES'],0,1,'P'); 
		        $this->Cell(51,2,'WARRANTY',0,0,'P');
		        $this->Cell(150,2,$quotation[0]['WARRANTYNOTES'],0,1,'P'); 
		        $this->Cell(51,2,'VALIDITY',0,0,'P');
		        $this->Cell(150,2,$quotation[0]['VALIDITYNOTES'],0,1,'P'); 
		        $this->SetFont('Arial','',8);	
	 		$this->Ln(5);

			$this->Cell(330,4,'Very truly yours,','',1,'C');
			$this->Cell(330,4,'PT. INTRACO PENTA, Tbk,','',1,'C');
	 		$this->Ln(25);
			$this->Cell(330,4,$quotation[0]['CREATENAME'],'',1,'C');
			//'Hp. 0823.9630.7017'
			$this->Cell(330,4,$quotation[0]['MOBILE'],'',1,'C');
			//pery.rahmansah@ipps.co.id
			$this->Cell(330,4,$quotation[0]['EMAIL'],'',1,'C');

			$lastY = $this->GetY();
			if($lastY>100){
				$this->AddPage($this->CurOrientation);
			}
	 		//$this->Ln(5);
			//$this->Cell(130,4,'Very truly yours,','',0,'C');
			//$this->Cell(130,4,'Approved by','',0,'C');
			//$this->Ln(20);
			//$this->Cell(130,4,$this->approved,'',0,'C');
			//$this->Cell(130,4,'EID/OIY James Cowcher','',0,'C');
		}

		private $widths;
		private $aligns;
	 
		function SetWidths($w)
		{
			//Set the array of column widths
			$this->widths=$w;
		}
	 
		function SetAligns($a)
		{
			//Set the array of column alignments
			$this->aligns=$a;
		}

		function Row($data)
		{
			//Calculate the height of the row
			$nb=0;
			for($i=0;$i<count($data);$i++)
				$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
			$h=5*$nb;
			//Issue a page break first if needed
			$this->CheckPageBreak($h);
			//Draw the cells of the row
			for($i=0;$i<count($data);$i++)
			{
				$w=$this->widths[$i];
				$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'P';
				//Save the current position
				$x=$this->GetX();
				$y=$this->GetY();
				//Draw the border
				$this->Rect($x,$y,$w,$h);
				//Print the text
				$this->MultiCell($w,5,$data[$i],0,$a);
				//Put the position to the right of the cell
				$this->SetXY($x+$w,$y);
			}
			//Go to the next line
			$this->Ln($h);
		}
	 
		function CheckPageBreak($h)
		{
			//If the height h would cause an overflow, add a new page immediately
			if($this->GetY()+$h>$this->PageBreakTrigger)
				$this->AddPage($this->CurOrientation);
		}

		function NbLines($w,$txt)
		{
			//Computes the number of lines a MultiCell of width w will take
			$cw=&$this->CurrentFont['cw'];
			if($w==0)
				$w=$this->w-$this->rMargin-$this->x;
			$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
			$s=str_replace("\r",'',$txt);
			$nb=strlen($s);
			if($nb>0 and $s[$nb-1]=="\n")
				$nb--;
			$sep=-1;
			$i=0;
			$j=0;
			$l=0;
			$nl=1;
			while($i<$nb)
			{
				$c=$s[$i];
				if($c=="\n")
				{
					$i++;
					$sep=-1;
					$j=$i;
					$l=0;
					$nl++;
					continue;
				}
				if($c==' ')
					$sep=$i;
				$l+=$cw[$c];
				if($l>$wmax)
				{
					if($sep==-1)
					{
						if($i==$j)
							$i++;
					}
					else
						$i=$sep+1;
					$sep=-1;
					$j=$i;
					$l=0;
					$nl++;
				}
				else
					$i++;
			}
			return $nl;
		}
	 
	}

	// Instanciation of inherited class
	$pdf = new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	//variable global
	$pdf->totalamount = 0;
	$pdf->no = $quotation[0]['PROSPECTIDA'];
	//$pdf->prepared = $quotation[0]['CUSTOMERNAME'];
	//$pdf->approved = $quotation[0]['CUSTOMERNAME'];
	$pdf->PROSPECTIDA = $quotation[0]['PROSPECTIDA'];
	$pdf->date = $quotation[0]['PROSPECTIDA'];
	$pdf->charge = $quotation[0]['PROSPECTIDA'];
	$pdf->year = substr($quotation[0]['PROSPECTIDA'], -2);
	$pdf->week = $quotation[0]['PROSPECTIDA'];
	$pdf->AddPage("P",'A4');

	$pdf->SetFont('Arial','B',12);
	$pdf->Ln(4);
	//$pdf->Cell(0,4,'Quotation Detail '.$pdf->PROSPECTIDA.' '.$pdf->charge.' '.$pdf->week.''.$pdf->year,'',0,'C');
	$pdf->Ln(10);

	$pdf->printPDF($quotation);

	$pdf->Output();
?>