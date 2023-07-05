<?php 
    include __DIR__.'/prtials/functions.php'
?>

<!-- Milestone 1 Creare un form che invii in GET la lunghezza della password. OK
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
Scriviamo tutto (logica e layout) in un unico file index.php OK
Milestone 2 Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS) Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente. 
-->


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Pasword Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- form -->
                <div class="form-container w-25 ms-5 mt-5">
                    <form action="./index.php" method="GET">
                        <div class="mb-3">
                            <label for="pswd" class="form-label">Inserisci la lunghezza della tua password in numeri </label>
                            <input type="text" class="form-control" id="pswd" aria-describedby="pswdHelp" placeholder="Esempio: 23" name="pswrd">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 </div>
                 <!-- messaggio della password generata -->
                <div class="message">
                    <?php if(isset($_GET['pswrd']) && (int)$_GET['pswrd'] >= 5 && (int)$_GET['pswrd'] <= 175) { ?>
                        <h2 class="ms-5 mt-5">La password rigenerata</h2>
                        <div class="pswrd-box overflow-auto border rounded-2 p-4 ms-5 mt-2">
                           <code> <?php echo  randomPswrd($_GET['pswrd']);?> </code>
                        </div>
                    <?php } else if ((isset($_GET['pswrd']) && (int)$_GET['pswrd'] <= 4)) { ?>
                        <div class="">
                            <?php echo '<div class="alert alert-warning mt-5 w-50 ms-5" role="alert">Il numero inserito deve essere superiore a 4</div>' ?>
                        </div>
                    <?php } else if ((isset($_GET['pswrd']) && (int)$_GET['pswrd'] >= 175)) {  ?>
                        <div class="">
                            <?php echo '<div class="alert alert-warning mt-5 w-50 ms-5" role="alert">Il numero inserito non puo essere superiore a 175</div>' ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>