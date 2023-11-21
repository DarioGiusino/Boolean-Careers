<?php
$text = $_GET['original'];
$censure = $_GET['censured'];
$censured_text = str_replace($censure, '***', $text);
$censured_text_length = strlen($censured_text);


if (str_contains($text, $censure)) {
    $result = "Il testo censurato è '$censured_text' ed è lungo $censured_text_length caratteri";
} else {
    $result = 'Il testo non contiene la parola da censurare';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords2</title>
</head>

<body style="background-color: #0d1117; color:#f0f6fc;">
    <h1>Testo originale</h1>
    <p>Il testo originale era '<?= $text ?>'' ed era lungo <?= strlen($text) ?> caratteri</p>

    <hr>

    <h1>Testo censurato</h1>
    <p><?= $result ?></p>

    <hr>

    <h1>Parola censurata</h1>
    <p><?= $censure ?></p>

</body>

</html>