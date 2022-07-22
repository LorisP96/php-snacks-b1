<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    <?php
        $teams = [
            [
                'team-home' => 'Ascoli',
                'team-score-home' => '420',
                'team-host' => 'Milano',
                'team-score-host' => '1',
            ],
            [
                'team-home' => 'Brindisi',
                'team-score-home' => '82',
                'team-host' => 'Venezia',
                'team-score-host' => '81',
            ],
            [
                'team-home' => 'Firenze',
                'team-score-home' => '42',
                'team-host' => 'Torino',
                'team-score-host' => '50',
            ],
            [
                'team-home' => 'Verona',
                'team-score-home' => '74',
                'team-host' => 'Pisa',
                'team-score-host' => '89',
            ],
        ];
    ?>
    <?php for($i = 0; $i < count($teams); $i++) { ?>
        <?php $thisTeam = $teams[$i]; ?>
        <h2>
            <?php echo $thisTeam['team-home']; ?> - <?php echo $thisTeam['team-host']; ?> | <?php echo $thisTeam['team-score-home']; ?> - <?php echo $thisTeam['team-score-host']; ?>
        </h2>
    <?php } ?>
</body>
</html>