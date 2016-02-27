<?php
    ini_set('memory_limit', '-1');
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once('assets/conn.php');
    /** PHPExcel_IOFactory */
    require_once('assets/Classes/PHPExcel/IOFactory.php');
    //cache-ing
    if (!file_exists("assets/kuncorotemplate/template1.xls")) {
            exit("please check file or contact Kuncoro Wicaksono Adi Baroto since there is no available file on folder view  \n");
    }

    set_time_limit(0);
    
    $objRichText = new PHPExcel_RichText();
    
    echo "<br/><p align='center' style='color:#999'>".date('H:i:s') . " : Load from Excel2007 file\n";
    $objPHPExcel = PHPExcel_IOFactory::load("assets/kuncorotemplate/template1.xls");
    $today = date('d M Y');
    
    $i=2;
    foreach($quotation AS $row){

    $objPHPExcel->getActiveSheet()->setCellValue('A4', $quotation[0]['CUSTOMERNAME']);
    $objPHPExcel->getActiveSheet()->setCellValue('A5', $quotation[0]['ADDRESS1'].", ".$quotation[0]['CITY']);
    $objPHPExcel->getActiveSheet()->setCellValue('B14', $quotation[0]['PROSPECTIDA']);
    $objPHPExcel->getActiveSheet()->setCellValue('B13', $quotation[0]['SUSPECTIDA']);
    $objPHPExcel->getActiveSheet()->setCellValue('B12', $quotation[0]['LEADSIDA']);
    $objPHPExcel->getActiveSheet()->setCellValue('A15', $quotation[0]['DETAILPRODUCTNYA']);
    $objPHPExcel->getActiveSheet()->setCellValue('F8', $today);
    $objPHPExcel->getActiveSheet()->setCellValue('F53', $quotation[0]['CREATENAME']);

    $objPHPExcel->getActiveSheet()->setCellValue('P5', "1/127 11-111/IPBPD ".$quotation[0]['PROSPECTIDA']." Uen");
    $objPHPExcel->getActiveSheet()->setCellValue('P6', $quotation[0]['PROSPECTIDA']." ".$quotation[0]['PROSPECTIDA']);
    $objPHPExcel->getActiveSheet()->setCellValue('P7', $quotation[0]['PROSPECTIDA']);

        $i++;
    }

    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    //$objWriter->save("assets/reportdownloaded/".$quotation[0]['PROSPECTID'].".xlsx");
    $objWriter->save("assets/kuncorodownloaded/".$quotation[0]['PROSPECTIDA'].".xlsx");

    echo "<br/> Peak memory usage: ".(memory_get_peak_usage(true)/1024/1024)." MB \r\n<br/>";
    
    echo date('H:i:s')." : Done writing files. </p>\r\n";
    //echo "<input type='button' style='background-color:#444444; color:#fff; font-family:arial,tahoma,sans-serif; font-size:18px; width:175px; height:35px' value='Close Window' onClick='javascript:self.close();'>";
    
    echo "<script>window.location='../../../assets/kuncorodownloaded/".$quotation[0]['PROSPECTIDA'].".xlsx';</script>";
?>
                            