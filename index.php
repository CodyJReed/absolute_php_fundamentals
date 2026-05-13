<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;

$num1 = 20;
$num2 = 3;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;
$output = $num1 += 1;
$output = rand();
$output = getrandmax();
$output = rand(1, 10);
// round
$output = round(4.4);
// ceil
$output = ceil(4.1);
// floor
$output = floor(4.9);
// sqrt
$output = sqrt(81);
// pi
$output = pi();
// abs
$output = abs(-4.9);
// max()
$output = max([1,4,9,150]);
// min
$output = min([1,4,9,150]);
// Awesome for currency formatting
$output = number_format(1234567.191234, 2, '.', ',');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?=
        $output
        ?>
      </p>
    </div>
  </div>
</body>

</html>