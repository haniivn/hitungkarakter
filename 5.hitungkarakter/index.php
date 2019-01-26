<?php
$string = "saya suka programming";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "Karakter \"" , chr($i) , "\" muncul $val kali.<br>";
}
?>