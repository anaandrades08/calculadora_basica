<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Padrão</title>
    <link rel="stylesheet" href="../css/calculadora.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora Padrão</h1>
        <form method="POST">
            <label for="numero1">Número 1:</label>
            <input type="number" id="numero1" name="numero1" step="any" required>
            
            <label for="numero2">Número 2:</label>
            <input type="number" id="numero2" name="numero2" step="any" required>

            <label for="operacao">Operação:</label>
            <select id="operacao" name="operacao" required>
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            
            <button type="submit">Calcular</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $operacao = $_POST['operacao'];
                $resultado = '';

                if (is_numeric($numero1) && is_numeric($numero2)) {
                    switch ($operacao) {
                        case 'adicao':
                            $resultado = $numero1 + $numero2;
                            break;
                        case 'subtracao':
                            $resultado = $numero1 - $numero2;
                            break;
                        case 'multiplicacao':
                            $resultado = $numero1 * $numero2;
                            break;
                        case 'divisao':
                            if ($numero2 != 0) {
                                $resultado = $numero1 / $numero2;
                            } else {
                                $resultado = 'Erro: Divisão por zero';
                            }
                            break;
                        default:
                            $resultado = 'Operação inválida';
                            break;
                    }
                    echo "<p>Resultado: <strong>$resultado</strong></p>";
                } else {
                    echo "<p>Por favor, insira números válidos.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
