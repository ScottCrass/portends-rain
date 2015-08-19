<?php
function ackermann( $m , $n )
{
    if ( $m==0 )
    {
        return $n + 1;
    }
    //optimize for low lavues of M. 
    elseif ($m==1)
  	{
         return $n + 2;
  	}   
  	elseif ($m==2)
  	{
         return 3 + 2 * $n;
  	}   
  	elseif ($m==3)
  	{
         return 5 + 8 * (2**$n-1);
  	}   
    elseif ( $n==0 )
    {
        return ackermann( $m-1 , 1 );
    }
    return ackermann( $m-1, ackermann( $m , $n-1 ) );
}
echo ackermann( 3, 4 );
?>
