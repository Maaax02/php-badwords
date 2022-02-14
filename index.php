<?php 
    $text = "Welcome!";
    $badWord = $_GET["badword"];
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
    <p> <?php echo $text, " ", strlen($text) ?> </p>
    <span> <?php echo str_replace("arola", "***", $badWord) ?></span>
</body>
</html>