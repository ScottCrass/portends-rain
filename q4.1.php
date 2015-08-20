<?php
$memoize = function($func)
{
    return function() use ($func)
    {
        static $cache = [];

        $args = func_get_args();
        $key = md5(serialize($args));

        if ( ! isset($cache[$key])) {
            $cache[$key] = call_user_func_array($func, $args);
        }

        return $cache[$key];
    };
};

$ackermann = $memoize(function($m,$n) use (&$ackermann)
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
});

echo $ackermann(3, 4);
?>
