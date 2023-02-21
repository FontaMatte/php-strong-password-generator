<?php


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