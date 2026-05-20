<?php
$show = false;

if (isset($_COOKIE['username'])) {
  $show = true;
} else {
  $show = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-8">
  <h1>Welcome Guest</h1>
  <?php if ($show) : ?>
    <div class="text-red-400 text-lg py-4">
      <?= $_COOKIE['username']; ?>
    </div>
    <a href="destroy.php" class="block hover:underline hover:text-blue-500">Delete cookie</a>
    <?php else : ?>
      <a href="/" class="block hover:underline hover:text-blue-500">Home</a>
  <?php endif ?>
</body>

</html>