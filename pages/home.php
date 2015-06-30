<?php
//echo '<pre>'; var_dump(); echo '<\pre>';

$db = new App\Database('blog-php');

$data = $db->query('SELECT * FROM articles');

echo '<pre>'; var_dump($data); //echo '<\pre>';
//$count = $pdo->exec('INSERT INTO articles SET title="My title", date="' . date('Y-m-d H:i:s') . '"');
//echo '<pre>'; var_dump($res); echo '</pre>';