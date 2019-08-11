<?php

namespace App\Helpers;

class Helper {    
    
        // Get month name
        public static function getMonthName($monthNumber)
        {
            return date("F", mktime(0, 0, 0, $monthNumber, 1));
        }   
    
}