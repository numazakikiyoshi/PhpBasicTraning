<?php
$a = array( "CurryPowder", "Potato", "Carrot", "Onion", "Rice");
foreach ( $a as $key => $value ) {
    echo $key ." ".$value ."<br />";
}
echo "<br />";
array_push($a,"研修");
foreach ( $a as $key => $value ) {
    echo $key ." ".$value ."<br />";
}

?>
