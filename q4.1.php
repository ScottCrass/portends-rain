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
                       return $ackermann( $m-1, $ackermann( $m , $n-1 ) );
                     }); 
echo $ackermann(2,1);
?>
