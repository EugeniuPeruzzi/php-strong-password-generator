<?php 
    // funzione che mi genera una paswrod random con una specifica lunghezza 
    function randomPswrd($number) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
        $pass = []; 
        $charactersLength = strlen($characters) - 1;
        for ($i = 0; $i < $number; $i++) {
            $n = rand(0, $charactersLength);
            $pass[] = $characters[$n];
        }
        return implode($pass);
    }
?>