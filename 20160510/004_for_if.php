<?php
for( $i=0;;$i++ ){
    if( $i===5 ){
        continue;
    } elseif ( $i===10 ) {
        echo "ループ抜けるよ";
        break;
    }
    echo $i . "<br />";
}
?>
