<?php

if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])) {
            $num1 = (int)$_POST["num1"];
            $num2 = (int)$_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "addition":
                    $result = add($num1, $num2);
                    break;
                case "subtraction":
                    $result = subtract($num1, $num2);
                    break;
                case "multiplication":
                    $result = multiply($num1, $num2);
                    break;
                case "division":
                    $result = div($num1, $num2);
                    break;
                case "modulo":
                    $result = modulo($num1, $num2);
                    break;
                default:
                    $result = "Opération non reconnue";
            }

            echo "<p>Résultat de l'opération : $result</p>";
}

function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

function sous(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

function mult(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

function div(int $nb1, int $nb2) : int
{
    if($nb2 !== 0){
        return $nb1 / $nb2;
    } else {
        return null;
    }
    
}

function modulo(int $nb1, int $nb2) : int
{
    if($nb2 !== 0){
        return $nb1 % $nb2;
    } else {
        return null;
    }
    
}

?>