<?php 

class Roman {
	function rome($a){ 
	$s='';
        switch($a){
		case 1 : $s='I'; break;
		case 2 : $s='II'; break;
		case 3 : $s='III'; break;
		case 4 : $s='IV'; break;
		case 5 : $s='V'; break;
		case 6 : $s='VI'; break;
		case 7 : $s='VII'; break;
		case 8 : $s='VIII'; break;
		case 9 : $s='IX'; break;
		case 10 : $s='X'; break;
		case 11 : $s='XI'; break;
		case 12 : $s='XII'; break;
		}
        return $s; 
} 
}
?>