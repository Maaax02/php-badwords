<?php 
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum exercitationem sunt molestias, quasi facere repellendus ad atque commodi, totam iste dicta nobis libero et assumenda accusantium dolor nostrum obcaecati architecto.";
    $badWord = $_GET["badword"];
    $censored = str_replace($badWord, "***", $text);
    //var_dump($badWord);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $text, " Lettere: ", strlen($text) ?> </p>
    <?php echo "<br><br>", $censored?>
</body>
</html>
