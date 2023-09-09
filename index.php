<?php
$t = rand(350,420) / 10;
echo $t. "\n";
// if ($t > 37) {
    // echo $t."helth bad";
// }
// else if ($t < 37) {
    // echo $t."Helth good";
// }
// else{
    // echo "<p style =' color: red;'>"$t." Helth Not Bad";
// }

$str = ($t > 37) ? $t. "helth good" : $t. "helth bad";
echo $str;