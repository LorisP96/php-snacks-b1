<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <?php 
        $par = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A rem asperiores reiciendis quisquam temporibus assumenda harum sunt ducimus velit saepe, quasi et provident sequi molestias dolorem deserunt est ipsum architecto!
        Doloribus nulla esse porro quibusdam nam repellat! Cum odio rerum mollitia tempora cupiditate placeat. Voluptate dolorem nam eveniet sed, in maiores temporibus sit officiis! Perspiciatis nisi itaque ipsum ex voluptatem.
        A magni quod iure cupiditate aperiam rem, beatae quo repudiandae quidem cumque expedita quae similique iste temporibus totam voluptas repellendus ipsam, vero blanditiis quisquam ullam odit non. Eligendi, aliquam ratione.
        Quae iure, nobis voluptatem blanditiis deleniti qui fuga officiis est et! Voluptas, numquam incidunt odio dolor nemo nisi maiores possimus? At nihil ex consequatur pariatur ullam, rerum voluptatibus dolore obcaecati?
        Numquam ad recusandae, cumque rerum ex dolor consequuntur at tenetur repellat, itaque enim blanditiis asperiores vel incidunt? Blanditiis at, eaque nisi quos pariatur aliquam necessitatibus nulla ea suscipit incidunt praesentium?';
        $myArray= explode('.', $par);
    ?>
    <?php for($i = 0; $i < count($myArray); $i++) { ?>
        <h3> <?php echo $myArray[$i] ?> </h3>
    <?php } ?>  
</body>
</html>