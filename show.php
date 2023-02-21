<?php

session_start();
include  __DIR__ . './functions.php';
echo $_SESSION['bho']
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


    <input type="text" value="<?php echo $_SESSION['generate']; ?>">
    <button>
        <i class="fa-regular fa-clone"></i>
    </button>
    <button onclick="<?php randomPassword() ?> window.location.reload();">
        <i class="fa-solid fa-arrows-rotate"></i>
    </button>
    <button onclick="document.location.href='index.php';">
        Torna indietro
    </button>

</body>

</html>

