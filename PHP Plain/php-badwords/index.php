<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body style="background-color: #0d1117; color:#f0f6fc;">
    <h1>Form badword</h1>

    <form action="badword.php" method="GET">
        <label style="display:block" for="paragraph">Inserisci un testo</label>
        <textarea name="original" id="paragrapg" cols="30" rows="10" placeholder="scrivi qualcosa..."></textarea>

        <hr>

        <label style="display:block" for="paragraph">Inserisci una parola da censurare</label>
        <input id="paragraph" type="text" name="censured" placeholder="Scrivi qualcosa...">

        <button>Invia</button>

    </form>
</body>
</html>