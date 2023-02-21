<?php

// MI SALVO LA LUNGHEZZA DELLA PASSWORD INSERITA DALL'UTENTE
$passwordLength = $_GET['password-length'];

// FUNZIONE PER GENERARE LA PASSWORD CASUALE
function randomPassword($passwordLength) {
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); 
    $combLen = strlen($comb) - 1; 
    for ($i = 0; $i < $passwordLength; $i++) {
        $n = rand(0, $combLen);
        $pass[] = $comb[$n];
    }
    print(implode($pass));
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>

        <h1>Stong Password Generator</h1>
        
        <form action="" method="GET">
            <label for="lunghezza-password">
                Caratteri Password:
            </label>
            <input type="number" id="lunghezza-password" name="password-length" placeholder="Inserisci num caratteri password">
            <button>GENERA</button>
        </form>

        <div>

            <h2>
                Password generata:
            </h2>
            <?php
                if (isset($_GET['password-length'])) {
                    randomPassword($passwordLength); 
                }
            ?>

        </div>

    </body>
</html>