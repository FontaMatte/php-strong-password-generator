<?php

    include __DIR__ .  '/function.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">

            <h1>
                Stong Password Generator
            </h1>
            
            <form action="" method="GET">
                <label for="lunghezza-password">
                    Caratteri Password:
                </label>
                <input type="number" id="lunghezza-password" name="password-length" placeholder="Inserisci num caratteri password">
                <button type="submit">
                    GENERA
                </button>
            </form>

            <div>

                <h2>
                    Password generata:
                </h2>
                <?php
                    if (isset($_GET['password-length'])) {

                        randomPassword($_GET['password-length']); 

                    }
                ?>

            </div>

        </div>

    </body>
</html>