<?php
// Nested Loop / Pengulangan Bersarang

echo "<hr>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++)
        echo " $j ";


    echo "<br>";
}
echo "<hr>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 4; $j++)
        echo " $j ";


    echo "<br>";
}

echo "<hr>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " $j ";
    }
    echo "<br>";
}

echo "<hr>";
for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo " $i ";
    }
    echo "<br>";
}
