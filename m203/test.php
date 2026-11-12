<?php
declare(strict_types=1);
require_once __DIR__ . "/fonctions.php";
echo "Addition : " . additionner(12, 8) . "<br>";
echo "Soustraction : " . soustraire(12, 8) . "<br>";
echo "Multiplication : " . multiplier(12, 8) . "<br>";

try {
    echo "Division : " . diviser(12, 0) . "<br>";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}