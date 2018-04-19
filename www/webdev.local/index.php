<!DOCTYPE html>
<html>
<head>
    <title>Created to test the debugger's work xdebug</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alexander Panov"/>
    <meta name="copyright" content="www.lpdis.ru"/>
    <link rel="stylesheet" href="css/index.css"/>
</head>
<body>


<div class="main">
    <h1 class="main__header">PHP calculating:</h1>
    <p class="main__text">We perform simple calculations on php</p>
    <p class="main__text">you can set a breakpoint</p>
    <p class="main__text">&#10004;</p>
    <p class="main__text">&#10004;</p>
    <p class="main__text">&#10004;</p>
    <?php
    $x = 2;
    $y = 2;
    $z = 2;
    $allsum = $x + $y * 2 + $z;
    ?>
    <p class="main__result">Result: <?php echo $allsum; ?></p>
</div>


<footer class="footer">
    <a class="footer__link" href="http://www.lpdis.ru">LPDIS.RU</a>
</footer>
</body>
</html>
