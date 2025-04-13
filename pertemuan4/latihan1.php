<?php

// PENGULANGAN / LOOPING
// for, while, do while, foreach
// while
// 1. Nilai Awal / Initial value
// 2. Kondisi Terminasi / saat looping berhenti
// 3. Increment / Decrement
$i = 10;
while ($i >= 1) {
    echo "  Hello World $i x <br>";
    $i = $i - 1;
}

echo "<hr>";

for ($i = 1; $i <= 10; $i = $i + 2) {
    echo "Hello World $i x <br>";
}
