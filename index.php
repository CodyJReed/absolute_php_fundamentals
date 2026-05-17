<?php

$base = 32;

$fToC = fn (int $f) => $f. "F = " .($f - $base) * (5 / 9) . "C";

echo $fToC(31);