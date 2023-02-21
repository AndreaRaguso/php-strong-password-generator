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

    <form action="" method="GET">

        <input type="text" value="<?php echo randomPassword() ?>">
        <button>
            <i class="fa-regular fa-clone"></i>
        </button>
        <button>
            <i class="fa-solid fa-arrows-rotate"></i>
        </button>
        <div>
            <input type="range" name="lenght" value="10" min="1" max="50" oninput="this.nextElementSibling.value = this.value">
            <output>10</output>
        </div>
    </form>

</body>

</html>