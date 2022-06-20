<?php
    require_once(PATH_CONTROLLER . "EmailController.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de E-mail</title>
</head>
<body>
    <?php
        (new Email)->enviar();
    ?>
</body>
</html>

