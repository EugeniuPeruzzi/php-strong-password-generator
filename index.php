<?php 
    // funzione che mi genera una paswrod random con una specifica lunghezza 
    function randomPswrd($number) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
        $pass = []; 
        $charactersLength = strlen($characters) - 1;
        for ($i = 0; $i < $number; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    if(isset($_GET['pswrd']) && (int)$_GET['pswrd'] !== 0) {
        $userStrNum = $_GET['pswrd'];
        echo $userStrNum;
    } 
    else{
        echo 'sorry'; // di prova
    } 



?>

<!-- Milestone 1 Creare un form che invii in GET la lunghezza della password. OK
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2 Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS) Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. 
-->


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pasword Generator</title>
</head>

<body>
<form action="./index.php" method="GET">
    <div class="mb-3">
        <label for="pswd" class="form-label">Inserisci la lunghezza della tua password in numeri </label>
        <input type="text" class="form-control" id="pswd" aria-describedby="pswdHelp" placeholder="Esempio: 23" name="pswrd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>