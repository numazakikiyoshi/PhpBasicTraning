<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello',110=>'I dont like Curry'];
var_dump($a);
echo "<br />";
foreach ( $a as $key => $value) {
    echo $key .",". $value ."<br />";
}
?>
