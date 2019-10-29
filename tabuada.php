<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <?php
        $numero = $_POST["numero"];

        for($i =1; $i <=9; $i++) {
            $soma= ($numero+$i);
            echo "$numero + $i = $soma <br/>";
        }
    ?>

</body>
</html>