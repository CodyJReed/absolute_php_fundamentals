<?php
$output = null;

$ids = [10, 22, 15, 45];
$users = ['tom', 'jim', 'fred'];
// Determine an arrays length
$output = count($users);
// sort
sort($ids);
sort($users);
// reverse sort order
rsort($ids);
rsort($users);
// add to end of an array
array_push($ids, 55);
// remove from end of array
array_pop($users);
// Add to front of array
array_unshift($users, 'jesse');
// Remove item from front of array
array_shift($ids);
// Slice
$slicedIds = array_slice($ids, 0, 2);
// var_dump($slicedIds);
// Splice
array_splice($users, 1, 1, 'cherry');
// Sum *useful for ints
$output = 'Sum of IDs: ' . array_sum($ids);
// Search -> returns the index
$output = 'cherry is at index: ' . array_search('cherry', $users);
// In -> returns int (0 | 1) if target if found within an array
$output = 'Does 22 exist in the $ids array: ' . in_array(22, $ids);
// explode
$tags = 'tech,code,programming';
$tagsArray = explode(",", $tags);
// var_dump($tagsArray)
// Implode
$output = implode(', ', $users);

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
      <p class="text-xl"><?= $output ?></p>
      <h2 class="text-xl font-semi-bold my-4">
        <p>
        <pre>
                  <?php print_r($ids); ?>
                </pre>
        </p>
      </h2>
      <h2 class="text-xl font-semi-bold my-4">
        <p>
        <pre>
                  <?php print_r($users); ?>
                </pre>
        </p>
      </h2>
      </p>
    </div>
  </div>
</body>

</html>