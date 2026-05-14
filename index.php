<?php
// Arrays and methods
$names = array('john', 'jack', 'adam');
$ints = [1, 2, 3, 4];

function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

inspect($ints);
// push/add to an array
$ints[4] = 100;
$ints[] = 101;
$ints[] = 102;
// Update/edit an array position
$ints[3] = 66;
// Remove/delete position
unset($ints[3]);

$ints = array_values($ints);

inspect($ints);

?>

<h1>Hello</h1>