<?php

require_once('assets/conn.php');
/** PHPExcel_IOFactory */
require_once('assets/Classes/PHPExcel/IOFactory.php');
//cache-ing
$cacheMethod = PHPExcel_CachedObjectStorageFactory:: cache_to_phpTemp;
$cacheSettings = array(' memoryCacheSize ' => '256MB');
PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

$objPHPExcel = PHPExcel_IOFactory::load($_FILES['file']['tmp_name']);
$hitung = 0;
$cek = false;

//$BAST_WEEK = $input['idbast'];

$queryTemp = "";

foreach ($objPHPExcel->setActiveSheetIndex(0)->getRowIterator() as $row) {
    $hitung++;
    $KUNCOROMENGHITUNG = $objPHPExcel->getActiveSheet()->getCell('A' . $hitung)->getCalculatedValue();

    if ($hitung >= 2 && isset($KUNCOROMENGHITUNG)) {
        $REFID = $objPHPExcel->getActiveSheet()->getCell('A' . $hitung)->getCalculatedValue();
        $SOURCEID = $objPHPExcel->getActiveSheet()->getCell('B' . $hitung)->getCalculatedValue();
        $CREATEDATE = $objPHPExcel->getActiveSheet()->getCell('C' . $hitung)->getCalculatedValue();
        $CREATENAME = $objPHPExcel->getActiveSheet()->getCell('D' . $hitung)->getCalculatedValue();
        $STAGEID = $objPHPExcel->getActiveSheet()->getCell('E' . $hitung)->getCalculatedValue();
        $PROJECT_NAME = $objPHPExcel->getActiveSheet()->getCell('F' . $hitung)->getCalculatedValue();
        $PROJECT_DESCRIPTION = $objPHPExcel->getActiveSheet()->getCell('G' . $hitung)->getCalculatedValue();
        $PROJECT_STATUS = $objPHPExcel->getActiveSheet()->getCell('H' . $hitung)->getCalculatedValue();
        $CONST_DATE = $objPHPExcel->getActiveSheet()->getCell('I' . $hitung)->getCalculatedValue();
        $CONST_DATE_TO_STRING = PHPExcel_Style_NumberFormat::toFormattedString($CONST_DATE, "M-YYYY");
        /* $CONST_DATE_TO_STRING = $CONST_DATE->getValue();
          if(PHPExcel_Shared_Date::isDateTime($CONST_DATE)) {
          $CONST_MONTH = date($format, PHPExcel_Shared_Date::ExcelToPHP($CONST_DATE_TO_STRING));
          $CONST_YEAR =  2;
          }
         */
        $CONST_STRING = explode("-", $CONST_DATE_TO_STRING);
        if (!empty($CONST_STRING[1])) {
            $CONST_MONTH = $CONST_STRING[0];
            $CONST_YEAR = $CONST_STRING[1];
        } else {
            $CONST_MONTH = $CONST_STRING[0];
            $CONST_YEAR = 2;
        }
        $CONST_END_DATE = $objPHPExcel->getActiveSheet()->getCell('J' . $hitung)->getCalculatedValue();
        $CONST_END_DATE_TO_STRING = PHPExcel_Style_NumberFormat::toFormattedString($CONST_END_DATE, "M-YYYY");
        $CONST_END_STRING = explode("-", $CONST_END_DATE_TO_STRING);
        if (!empty($CONST_END_STRING[1])) {
            $CONST_END_MONTH = $CONST_END_STRING[0];
            $CONST_END_YEAR = $CONST_END_STRING[1];
        } else {
            $CONST_END_MONTH = "";
            $CONST_END_YEAR = "";
        }
        $PROJECT_PROVINCE = $objPHPExcel->getActiveSheet()->getCell('K' . $hitung)->getCalculatedValue();
        $TOWN = $objPHPExcel->getActiveSheet()->getCell('L' . $hitung)->getCalculatedValue();
        $PROJECT_ADDRESS = $objPHPExcel->getActiveSheet()->getCell('M' . $hitung)->getCalculatedValue();
        $PROJECT_CATEGORY = $objPHPExcel->getActiveSheet()->getCell('N' . $hitung)->getCalculatedValue();
        $PROJECT_STAGE = $objPHPExcel->getActiveSheet()->getCell('O' . $hitung)->getCalculatedValue();
        $ARCHITECDESIGNER = $objPHPExcel->getActiveSheet()->getCell('P' . $hitung)->getCalculatedValue();
        $PROJECT_PUBLISH_DATE = $objPHPExcel->getActiveSheet()->getCell('Q' . $hitung)->getCalculatedValue();
        $DEVPROP_MANAGER = $objPHPExcel->getActiveSheet()->getCell('R' . $hitung)->getCalculatedValue();
        $ENGINER_CONSULTANT = $objPHPExcel->getActiveSheet()->getCell('S' . $hitung)->getCalculatedValue();
        $MAIN_CONTRACTOR = $objPHPExcel->getActiveSheet()->getCell('T' . $hitung)->getCalculatedValue();
        $SUB_CONTRACTOR = $objPHPExcel->getActiveSheet()->getCell('U' . $hitung)->getCalculatedValue();
        $PROJECT_VALUE = $objPHPExcel->getActiveSheet()->getCell('V' . $hitung)->getCalculatedValue();
        $ADDRESSABLE_VALUE = $objPHPExcel->getActiveSheet()->getCell('W' . $hitung)->getCalculatedValue();
        $PICKUPDATE = $objPHPExcel->getActiveSheet()->getCell('X' . $hitung)->getCalculatedValue();
        $QUALITY = $objPHPExcel->getActiveSheet()->getCell('Y' . $hitung)->getCalculatedValue();
        $ASSIGNTYPE = $objPHPExcel->getActiveSheet()->getCell('Z' . $hitung)->getCalculatedValue();


        //$queryTemp .= "('$WH','$NN'),";
        $DETAIL = "INSERT INTO `lead` (REFID, SOURCEID, CREATEDATE, CREATENAME, STAGEID, PROJECT_NAME, PROJECT_DESCRIPTION, PROJECT_STATUS, CONST_MONTH, CONST_YEAR, CONST_END_MONTH, CONST_END_YEAR, PROJECT_PROVINCE, TOWN, PROJECT_ADDRESS, PROJECT_CATEGORY, PROJECT_STAGE, ARCHITECDESIGNER, PROJECT_PUBLISH_DATE, DEVPROP_MANAGER, ENGINER_CONSULTANT, MAIN_CONTRACTOR, SUB_CONTRACTOR, PROJECT_VALUE, ADDRESSABLE_VALUE, PICKUPDATE, QUALITY, ASSIGNTYPE)
            VALUES
            ('$REFID','$SOURCEID','$CREATEDATE','$CREATENAME','$STAGEID','$PROJECT_NAME','$PROJECT_DESCRIPTION','$PROJECT_STATUS','$CONST_MONTH','$CONST_YEAR','$CONST_END_MONTH','$CONST_END_YEAR','$PROJECT_PROVINCE','$TOWN','$PROJECT_ADDRESS','$PROJECT_CATEGORY','$PROJECT_STAGE','$ARCHITECDESIGNER','$PROJECT_PUBLISH_DATE','$DEVPROP_MANAGER','$ENGINER_CONSULTANT','$MAIN_CONTRACTOR','$SUB_CONTRACTOR','$PROJECT_VALUE','$ADDRESSABLE_VALUE','$PICKUPDATE','$QUALITY','$ASSIGNTYPE')";
        $success = mysql_query($DETAIL) or die(mysql_error());
    }
}

//echo $DETAIL;
echo "<script>alert('Upload Done!');window.location ='pslead'</script>";
?>