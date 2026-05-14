<?php
$output = null;
$string = 'Hello World';
// string length
$output = strlen($string);
// Word count
$output = str_word_count($string);
// string position
$output = strpos($string, 'World');
// Substring
$output = substr($string, 6, 5);
// String replace
$output = str_replace('World', 'Universe', $string);
// string to lowercase
$output = strtolower($string);
// string to uppercase
$output = strtoupper($string);
// Capitalize string
$output = ucwords($string);
// trim whitespace
$output = trim('     Hello World    ');
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>