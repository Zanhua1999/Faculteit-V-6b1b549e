<?php
$line = readline("Van welk getal wil je de faculteit weten?");
$i = 1; $j = 1;
while ( $i <= $line ) {
    $j *= $i;
    $i++;
}
echo $j;
?>