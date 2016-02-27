<?php
    error_reporting(E_ALL);
    
    date_default_timezone_set('Europe/London');
    
    /** PHPExcel_IOFactory */
    require_once 'application/views/Classes/PHPExcel/IOFactory.php';
    
    if (!file_exists("assets/kuncorotemplate/template1.xls")) {
            exit("please check file template .xls available on folder assets/kuncorotemplate  \n");
    }
    
	$objRichText = new PHPExcel_RichText();
	
	$product_group = '';
	$grupke = 2;
    //echo date('H:i:s') . " Load from Excel2007 file\n";

    // $objPHPExcel = PHPExcel_IOFactory::load("application/views/exim_report/export_planspec.xls");
    $objReader = PHPExcel_IOFactory::createReader('Excel5');
    $objPHPExcel = $objReader->load('assets/kuncorotemplate/template1.xls');
    $objPHPExcel->setActiveSheetIndex(0);
    $objPHPExcel->getActiveSheet()->setTitle('Prospect');
	$objPHPExcel->getActiveSheet()->setCellValue('B5', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('B9', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('P5', "1/127 11-111/IPBPD ".$quotation[0]['PROSPECTID']." Uen");
	$objPHPExcel->getActiveSheet()->setCellValue('V7', "LZBPD 111 ".$quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('E14', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('B7', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('V5', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('P7', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('U7', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('E10', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('E11', $quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('E13', $quotation[0]['PROSPECTID']." ".$quotation[0]['PROSPECTID']);
	$objPHPExcel->getActiveSheet()->setCellValue('E17', $quotation[0]['PROSPECTID']);
	$startnya = 21;
	
	
    
    //$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');
    //echo date('H:i:s') . " Write to Excel2007 format\n";
    $objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    //$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
    if(isset($inti[0]['naming'])){
    	$namanya = $inti[0]['naming'];
    }else{
    	$namanya = 'NoRBS';
    }
    $objWriter->save(base_url()."assets/kuncorodownloaded/".$quotation[0]['PROSPECTID'].".xls");
    
    // Echo memory peak usage
    $timezone  = +7;
    echo "<p align='center'><br/>Download Time : " . gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I"))) . " <br/>Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";
    
    // Echo done
    echo date('H:i:s') . " Done writing files.</p>\r\n";
    //echo "<input type='button' style='background-color:#FFCC66; color:#000000;font-family:arial,tahoma,sans-serif; font-size:18px; width:175px; height:35px' value='Close Window' onClick='javascript:self.close();'>";
    
    echo "<script>
            //alert('Export done, Click OK to download');
            window.location='../../../assets/kuncorodownloaded/".$quotation[0]['PROSPECTID'].".xls';
        </script>";
    ?>