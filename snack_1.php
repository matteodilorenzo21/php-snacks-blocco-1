<?php
$partite = [
    [
        'squadra casa' => 'Olimpia Milano',
        'punteggio casa' => 65,
        'squadra ospite' => 'Virtus Bologna',
        'punteggio ospite' => 50,
    ],
    [
        'squadra casa' => 'Pallacanestro Varese',
        'punteggio casa' => 55,
        'squadra ospite' => 'Mens Sana Siena',
        'punteggio ospite' => 60,
    ],
    [
        'squadra casa' => 'Ginnastica Triestina',
        'punteggio casa' => 70,
        'squadra ospite' => 'Pallacanestro Treviso',
        'punteggio ospite' => 65,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1 | Partite</title>
</head>

<body>
    <ul>
        <?php foreach ($partite as $partita) : ?>
            <li><?php echo $partita['squadra casa']; ?> - <?php echo $partita['squadra ospite']; ?> | <?php echo $partita['punteggio casa']; ?>-<?php echo $partita['punteggio ospite']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>