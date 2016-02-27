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
    
    echo date('H:i:s') . " Load from Excel2007 file\n";
    $objPHPExcel = PHPExcel_IOFactory::load("assets/kuncorotemplate/template1.xls");
    
    $i=2;
    foreach($quotation AS $row){

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

        $i++;
    }

    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    //$objWriter->save("assets/reportdownloaded/".$quotation[0]['PROSPECTID'].".xlsx");
    $objWriter->save("assets/kuncorodownloaded/".$quotation[0]['PROSPECTID'].".xlsx");

    echo date('H:i:s')." Peak memory usage: ".(memory_get_peak_usage(true)/1024/1024)." MB \r\n";
    
    echo date('H:i:s')." Done writing files. \r\n";
    echo "<input type='button' style='background-color:#444444; color:#fff; font-family:arial,tahoma,sans-serif; font-size:18px; width:175px; height:35px' value='Close Window' onClick='javascript:self.close();'>";
    
    echo "<script>window.location='../../../assets/kuncorodownloaded/".$quotation[0]['PROSPECTID'].".xlsx';</script>";
?>
                            