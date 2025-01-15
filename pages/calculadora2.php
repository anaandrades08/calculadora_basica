<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link rel="stylesheet" href="../css/calculadora2.css">
</head>
<body>
    <h2>Calculadora PHP</h2>
    <div class="container">
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Primeiro Número" required>
            <select name="operacao">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="number" name="num2" placeholder="Segundo Número" required>
            <button type="submit" name="calcular">Calcular</button>
        </form>
        <?php
            if (isset($_POST['calcular'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacao = $_POST['operacao'];
                
                switch ($operacao) {
                    case "add":
                        $resultado = $num1 + $num2;
                        break;
                    case "sub":
                        $resultado = $num1 - $num2;
                        break;
                    case "mul":
                        $resultado = $num1 * $num2;
                        break;
                    case "div":
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                        } else {
                            $resultado = "Erro: Divisão por zero!";
                        }
                        break;
                    default:
                        $resultado = "Operação inválida!";
                        break;
                }
                echo "<div class='resultado'>Resultado: $resultado</div>";
            }
        ?>
    </div>
</body>
</html>
