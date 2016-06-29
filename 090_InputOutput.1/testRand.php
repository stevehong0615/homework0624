<?php

$a[0] = 100;
for ($i = 1; $i <= 3; $i++)
{
    $a[$i] = rand(1, 49);
}

var_dump($a);

?>