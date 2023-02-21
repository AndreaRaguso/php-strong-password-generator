<?php


session_start();

function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number = '1234567890';
    $simbol = '!_-^\$%/=?#@';
    $string = '';
    if($_GET['option1'] == 1){
        $string .= $alphabet;
    }
    else if ($_GET['option2'] == 1){
        $string .= $number;
    }
    else if ($_GET['option3'] == 1){
        $string .= $simbol;
    }
    else{
        $string = $alphabet . $number .$simbol;
    }
    if($_GET['with'] == 0){
        $without = true;
    }
    $pass = array();
    $alphaLength = strlen($string) - 1;
    while (count($pass) < $_GET['lenght']) {
        $n = rand(0, $alphaLength);
        if($without == true){
            $_SESSION['bho'] = 'no';
            if(!in_array($string[$n], $pass)){
                $pass[] = $string[$n];
            }
        }
        else{
            $_SESSION['bho'] = 'si';
            $pass[] = $string[$n];
        }
    }

    $_SESSION['generate'] = implode($pass);

    return $_SESSION['generate'];
}




?>