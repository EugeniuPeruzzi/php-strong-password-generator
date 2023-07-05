<?php 
    session_start();
    include __DIR__.'/prtials/functions.php'
?>


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
                <div class="message">
                <h2 class="ms-5 mt-5">La password generata</h2>
                    <div class="pswrd-box overflow-auto border rounded-2 p-4 ms-5 mt-2">
                        <code> <?php echo  randomPswrd($_SESSION['pswrd']);?> </code>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>