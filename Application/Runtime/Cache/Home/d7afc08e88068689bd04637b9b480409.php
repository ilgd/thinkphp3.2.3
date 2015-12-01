<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php if(is_array($data)): foreach($data as $key=>$a): echo ($a["id"]); ?><br><?php endforeach; endif; ?>
</body>
</html>