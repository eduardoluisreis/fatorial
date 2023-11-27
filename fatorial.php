<?php
function fatorial($n)
{
    return $n > 1 ? $n * fatorial($n - 1) : 1;
}

function sanitizeInput($input)
{
    return filter_var($input, FILTER_VALIDATE_INT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nInput = isset($_POST["fatorial"]) ? $_POST["fatorial"] : '';
    // Sanitiza a entrada do usuário
    $n = sanitizeInput($nInput);

    if ($n !== false) {
        // Se a entrada for válida, exibe o resultado
        echo "<div class='result'>O fatorial de $n é => " . fatorial($n) . "</div>";
    } else {
        // Se a entrada não for válida, exibe uma mensagem de erro
        echo "<div class='error'>Por favor, insira um número inteiro válido.</div>";
    }
}
?>