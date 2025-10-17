<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro to php</title>
</head>
<body>
    <?php
    $heading="Welcome";
    $paragraph= "this is php";
    $car =["volva", "toyota", "BMW", "Tesla","etc."];
    
    ?>
    <h1><?=$heading ?></h1>
    <p><?=$paragraph?></p>
    <ul>
        <?php foreach($Car as $car):?>
            <li><?=$car?></li>
            <?php endforeach;?>
    </ul>
    
</body>
</html>