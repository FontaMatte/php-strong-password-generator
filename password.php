<?php

    session_start();

    if (isset($_SESSION['password'])) {

        echo '<h3>Password Generata:</h3>';
        echo '<div>'.$_SESSION['password'].'</div>';
    }


