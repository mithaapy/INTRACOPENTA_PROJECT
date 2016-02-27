<?php

class Privileges {
    
    function getdate(){
        return date('dmY');
    }
    
    public function main($idrole) {
        switch ($idrole) {
            case 1: $data = $this->satu(); break;
            case 2: $data = $this->dua(); break;
            case 3: $data = $this->tiga(); break;
            case 4: $data = $this->empat(); break;
            case 5: $data = $this->lima(); break;
            case 6: $data = $this->enam(); break;
            case 7: $data = $this->tujuh(); break;
            case 8: $data = $this->delapan(); break;
        }
        return $data;
    }
    
    public function satu() {//General
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }

    public function dua() {//Salesman
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function tiga() {//Head of Branch
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function empat() {//HO Sales Manager
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function lima() {//HO Director / GM
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function enam() {//Marketing
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function tujuh() {//Administrator
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
    
    public function delapan() {//Holding
        $data = array(
            'TempSidebarMenu1' => '',
            'TempSidebarMenu2' => '',
            'TempSidebarMenu3' => '',
            'TempSidebarSubmenu31' => '',
            'TempSidebarSubmenu32' => '',
            'TempSidebarSubmenu33' => '',
            'TempSidebarSubmenu34' => '',
            'TempSidebarMenu4' => '',
            'TempSidebarMenu5' => '',
            'TempSidebarMenu6' => '',
            'TempSidebarSubmenu61' => '',
            'TempSidebarSubmenu62' => '',
            'TempSidebarSubmenu63' => '',
            'TempSidebarSubmenu64' => '',
            'TempSidebarSubmenu65' => '',
            'TempSidebarSubmenu66' => '',
            'TempSidebarMenu7' => '',
            'TempSidebarSubmenu71' => '',
            'TempSidebarSubmenu72' => '',
            'TempSidebarSubmenu73' => '',
            'TempSidebarMenu8' => '',
            'TempSidebarSubmenu81' => '',
            'TempSidebarSubmenu82' => '',
            'TempSidebarSubmenu83' => '',
            'TempSidebarSubmenu84' => '',
            'TempSidebarSubmenu85' => '',
            'TempSidebarSubmenu86' => '',
            'TempSidebarMenu9' => '',
            'TempSidebarSubmenu91' => '',
            'TempSidebarSubmenu92' => '',
            'TempSidebarSubmenu93' => '',
            'TempSidebarSubmenu94' => '',
            'TempSidebarSubmenu95' => '',
            'TempSidebarSubmenu96' => '',
            'TempSidebarSubmenu97' => '',
            'TempSidebarSubmenu98' => '',
            'TempSidebarSubmenu99' => '',
            'TempSidebarSubmenu910' => '',
            'TempSidebarSubmenu911' => '',
            'TempSidebarSubmenu912' => '',
            'TempSidebarSubmenu913' => '',
        );
        return $data;
    }
}
