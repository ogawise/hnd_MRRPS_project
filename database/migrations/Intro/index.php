<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP document</title>
    <link rel="stylesheet" href="./assets/style.css"/>
    <script src="./assets/script.js" defer></script>
</head>
<body>
    <?php
    $heading="Welcome to php";
    $paragraph= "this is asimple html generated with a php file";
    $sitename ="learnPHP";
    $car =["volva", "toyota", "BMW", "Tesla","etc."];
    ?>
    <header>
        
    <h1><?=$heading ?></h1>
    <p><?=$paragraph?></p>
</header>

<main>
    <section>
        <h2>The cars we have to buy</h2>
        <ul class="list" class="hidden">
            <?php foreach($cars as $car ):?>
                <li><?=$car?></li>
                <?php endforeach;?>
                0000
        </ul>
</section>
</main>


<footer>
    <p>Copyright &copy;<?= date('Y')?></p>
</footer>
</body>
</html>