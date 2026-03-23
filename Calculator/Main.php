<?php
  
    function overPaid($value, $percent){
        return ($percent / 100) * $value;
    }

    function totalPay($value, $percent){
     return $value + overPaid($value, $percent);
    }

    function perMonth($value, $percent, $month){
     return totalPay($value, $percent) / $month;
    }
    
?>