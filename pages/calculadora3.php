<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com PHP</title>
    <link rel="stylesheet" href="../css/calculadora3.css">
</head>
<body>
    <div class="calculator">
        <form method="post" action="">
            <input type="text" name="result" class="result" readonly value="<?php echo isset($_POST['result']) ? $_POST['result'] : ''; ?>">
            <br>
            <input type="submit" name="btn" value="7">
            <input type="submit" name="btn" value="8">
            <input type="submit" name="btn" value="9">
            <input type="submit" name="btn" value="/">
            <br>
            <input type="submit" name="btn" value="4">
            <input type="submit" name="btn" value="5">
            <input type="submit" name="btn" value="6">
            <input type="submit" name="btn" value="*">
            <br>
            <input type="submit" name="btn" value="1">
            <input type="submit" name="btn" value="2">
            <input type="submit" name="btn" value="3">
            <input type="submit" name="btn" value="-">
            <br>
            <input type="submit" name="btn" value="0">
            <input type="submit" name="btn" value=".">
            <input type="submit" name="btn" value="=">
            <input type="submit" name="btn" value="+">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $currentValue = $_POST['result'];
        $buttonClicked = $_POST['btn'];

        if ($buttonClicked == "=") {
            $currentValue = eval("return $currentValue;");
        } else {
            $currentValue .= $buttonClicked;
        }
        echo '<script>document.querySelector(".result").value = "' . $currentValue . '";</script>';
    }
    ?>
</body>
</html>
