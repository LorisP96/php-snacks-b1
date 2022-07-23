<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, 
Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
</head>
<body>
    <?php 
        $students = [
            [
                'name' => 'Marco',
                'lastname' => 'Rossi',
                'marks' => [
                    'history' => 8,
                    'math' => 7,
                    'geography' => 9,
                ],
            ],
            [
                'name' => 'Baddy',
                'lastname' => 'Trentaquattro',
                'marks' => [
                    'history' => 10,
                    'math' => 1,
                    'geography' => 1,
                ],
            ],
            [
                'name' => 'Giovanni',
                'lastname' => 'Giovannino',
                'marks' => [
                    'history' => 6,
                    'math' => 4,
                    'geography' => 5,
                ],
            ],
        ];
    ?>
    <ul>
    <?php for($i = 0; $i < count($students); $i++) { 
        $student = $students[$i];
    ?>
        <li>
            <?php echo $student['name']; ?> <?php echo $student['lastname']; ?> <br>
            Media Voti : 
            <?php echo array_sum($student['marks'])/count($student['marks']) ?>
        </li>
    <?php } ?>
    </ul>
</body>
</html>