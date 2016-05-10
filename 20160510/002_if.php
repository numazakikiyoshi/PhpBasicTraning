<?php
$a = 92;

echo $a .'は<br/>';
if( $a < 10 ){
    echo "10より小さい";
} elseif( $a < 20 ){
    echo "10以上で 20より小さい";
} elseif( $a < 30 ){
    echo "20以上で 30より小さい";
} elseif( $a < 40 ){
    echo "30以上で 40より小さい";
} elseif( $a < 50 ){
    echo "40以上で 50より小さい";
} elseif( $a < 60 ){
    echo "50以上で 60より小さい";
} elseif( $a < 70 ){
    echo "60以上で 70より小さい";
} elseif( $a < 80 ){
    echo "70以上で 80より小さい";
} elseif( $a < 90 ){
    echo "80以上で 90より小さい";
} elseif( $a < 100 ){
    echo "90以上で 100より小さい";
}
else {
    echo "100以上";
}
?>
