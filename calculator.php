<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operation = $_POST['operation'];
    $result = "";

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = ($num2 != 0) ? $num1 / $num2 : "Division by zero error";
            break;
        case "exponentiate":
            $result = pow($num1, $num2);
            break;
        case "percentage":
            $result = ($num1 / 100) * $num2;
            break;
        case "sqrt":
            $result = sqrt($num1);
            break;
        case "logarithm":
            $result = log($num1);
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "The result is: " . $result;
}
?>
