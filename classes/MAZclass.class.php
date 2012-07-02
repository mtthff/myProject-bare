<?php
/**
 * Description 
 *
 * @author mtthff(at)gmail.com
 */

require_once 'classes/MAZmysql.class.php';

class MAZclass extends MAZmysql {
//
    protected $var1;

    public function firstmethode(){
    //
 
	}


// other practical methods
     public function print_r_and_exit($array){
     // Debug-Methode: gives $array in a formattet way and exits
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        exit;
     }

     protected function array_search_in_2dim($haystack, $needle, $key){
    //durchsucht zweidimensionalen Array $haystack mit Schl�ssel $key nach $needle
        foreach ($haystack as $value){
            if($value[$key] == $needle) return TRUE;
        }
        return FALSE;
    }
}
?>