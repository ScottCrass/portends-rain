<?php
//incomplete
function atoi($myString)
{
$result = 0;
$x = 0;
for ($x = 0; $myString['x'] != '\0'; $x++) {
    $result = $result*10 + $myString['x'] -'0'; 
} 
return $result;
}
echo atoi('910');

?>
