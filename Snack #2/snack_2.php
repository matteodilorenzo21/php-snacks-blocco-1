<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2 | Accesso</title>
</head>

<body>
    <form action="validatore.php" method="GET">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="mail">Email:</label>
        <input type="text" name="mail" id="mail" required><br><br>

        <label for="age">Età:</label>
        <input type="number" name="age" id="age" required><br><br>

        <input type="submit" value="Invia">
    </form>
</body>

</html>