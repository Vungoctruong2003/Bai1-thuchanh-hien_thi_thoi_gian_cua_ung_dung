<?php
for($i=0; $i<3; $i++){
    for($j=0; $j<9; $j++){
        echo "*";
    }
    echo "</br>";
}

echo "</br>";

for($i=0; $i<=5; $i++){
    for($j=0; $j<=$i; $j++){
        echo "*";
    }
    echo "</br>";
}

echo "</br>";

for($i=5; $i>=0; $i--){
    for ($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "</br>";
}
