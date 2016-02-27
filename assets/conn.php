<?php
    mysql_connect('localhost','intn2489_kuncoro','Welcome1!');
    mysql_selectdb('intn2489_inta');
    mysql_set_charset('utf8');
    
    function query($sql){
        $hasil = mysql_query($sql);
        if(!$hasil){
            $pesan = 'ERROR NO: '.mysql_errno()."\n";
            $pesan .= 'INVALID Query: '.mysql_error()."\n";
            $pesan .= 'Whole Query: '.$sql;
            die($pesan);
        }
        $temp = array();
        while($row = mysql_fetch_assoc($hasil)){
            $temp[]=$row;
        }
        return $temp;
    }
    
    function queryExecute($sql){
        $hasil = mysql_query($sql);
        if(!$hasil){
            $pesan = 'ERROR NO: '.mysql_errno()."\n";
            $pesan .= 'INVALID Query: '.mysql_error()."\n";
            $pesan .= 'Whole Query: '.$sql;
            return mysql_errno();
        }
        return true;
    }
?>