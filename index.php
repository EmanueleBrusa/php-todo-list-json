<?php

    $jsonData = file_get_contents('data/to_do.json'); 

    $data = json_decode($jsonData, true);

    // Verifica se il decoding del JSON ha avuto successo
    if ($data === null) {
        // Errore nella decodifica del JSON
        echo 'Errore nella decodifica del JSON';
    } else {
        // Il JSON è stato decodificato correttamente
        // Puoi accedere ai dati come array associativo
        
        // Esempio di iterazione sui dati e stampa dei valori
        foreach ($data as $item) {
            echo $item['text'] . ' - ' . ($item['done'] ? 'Fatto' : 'Da fare') . '<br>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./css/style.css">
    <title>To do list</title>
</head>
<body>
    



    <!--cdn vuejs-->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</body>
</html>