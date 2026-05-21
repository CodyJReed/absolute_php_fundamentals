<?php
// local db creds...
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'cody';
$password = '123456';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try { 
  // Create PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exception on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Fetch as Assoc Array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
} catch (PDOException $err) {
  echo 'Connection failed: ' . $err->getMessage();
}