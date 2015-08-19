<?php
function Palindrome($string) {
  //we have finished. It is a palindrome.
    if ((strlen($string) == 1) || (strlen($string) == 0)) {
        echo "This is a palindrome";
    }
    else {
  //if the string is equal on both ends call recurse one character further in on each end
        if (substr($string,0,1) == substr($string,(strlen($string) - 1),1)) {
            return Palindrome(substr($string,1,strlen($string) -2));
        }
  //Or its not a palindrome. Go home.
        else { echo "String is not a palindrome, sorry."; }
    }
}
Palindrome("tst");
?>
