<?php
    
    /// FUNZIONE PER GENERARE LA PASSWORD CASUALE
    function randomPassword($lunghezza) {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=';
        $password = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $password;
    }
