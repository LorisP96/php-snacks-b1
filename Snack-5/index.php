<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack5</title>
</head>
<body>
    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        $keys = array_keys($db);
    ?>
    <div class="container">
        <?php for($i = 0; $i < count($db); $i++) { ?>
            <div class="box">
                <h2><?php echo $keys[$i] ?></h2>
            
                <?php foreach($db[$keys[$i]] as $key => $value) { ?>
                    <div class="name"> <?php echo $value['name'] ?> <?php echo $value['lastname'] ?> </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>