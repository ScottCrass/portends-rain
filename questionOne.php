<?php
  function atoi($myString)
   {
     $result = 0;
     for($i=0;$i<strlen($myString);$i++)
     {
        $result= $result*10 + $myString[$i] - '0';
     }
     return $result;
    }
    //That's the combination to my luggage! 
    echo atoi('12345');
?>
