<?php
  function atoi($myString)
   {
     $result = 0;
     for($i=0;$i<strlen($myString);$i++)
     {
       //bitshift instead of multiplication ie: result = result*2^3 + result*2^1
        $result= ($result<<3)+($result<<1) + $myString[$i] - '0';
     }
     return $result;
    }
    //That's the combination to my luggage! 
    echo atoi('12345');
?>
