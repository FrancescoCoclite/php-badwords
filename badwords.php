<?php
    $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit";
    $testo_formattato= strtolower($testo);
    $lunghezza= strlen($testo);
    $censura= $_GET['censura'];
    $rimpiazzo= str_replace($censura, '***', $testo_formattato);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<p> <?php echo $testo ?>

<br> e la lunghezza della stringa è: <?php echo $lunghezza ?>

</p>
<?php echo $rimpiazzo ?>
<p>
    
</p>


</body>
</html>