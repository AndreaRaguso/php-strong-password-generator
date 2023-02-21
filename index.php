<?php

include  __DIR__ . './functions.php';

?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Password generator</title>
</head>

<body>

    <form action="./show.php" method="GET">


        <input type="range" name="lenght" value="10" min="1" max="50" oninput="this.nextElementSibling.value = this.value">
        <output>10</output>
        <button onclick="randomPassword()">
            <i class="fa-regular fa-circle-check"></i>
        </button>
        <div>
            <input type="checkbox" id="option1" name="option1" value="1">
            <label for="option1"> Lettere </label><br>
            <input type="checkbox" id="option2" name="option2" value="1">
            <label for="option2"> Numeri </label><br>
            <input type="checkbox" id="option3" name="option3" value="1">
            <label for="option3"> Simboli </label><br><br>
        </div>

        <div>
            <input type="radio" id="with" name="with" value="1">
            <label for="with">Ripeti caratteri</label><br>
            <input type="radio" id="with" name="with" value="0">
            <label for="with">Non ripetere caratteri</label><br>
        </div>


    </form>

</body>

</html>