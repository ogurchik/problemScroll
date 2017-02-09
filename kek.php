<?php 
$cot = preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
echo $matches[0];
?>
