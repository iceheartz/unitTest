<?php

require_once 'vendor/autoload.php';

$pages = new \Controllers\Core\Web\Pages();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>unit Test</title>
</head>

<body>
<h1><?php echo $pages->render(); ?></h1>
<pre><?php var_dump($pages->returnArray()); ?></pre>
</body>
</html>
