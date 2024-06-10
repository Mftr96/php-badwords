<?php
$text=$_GET["text"];
$nome=$_GET["nome"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testo inviato </title>
</head>
<body>
    <p>il testo inviato è lungo <?php
    echo strlen($text)
    
    ?>
    caratteri
    </p>

    <p><?php echo $nome ?></p>
    
</body>
</html>