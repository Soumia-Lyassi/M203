<?php
declare(strict_types=1);

require_once __DIR__ . '/fonctions.php';

// ===== Étape 1 =====
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 x 8 = " . multiplier(12, 8) . PHP_EOL;

try {
    echo "Division : " . diviser(12, 0) . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}

// ===== Étape 2 =====
echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;
echo "8 est pair ? " . (estPair(8) ? "oui" : "non") . PHP_EOL;

echo "5 est positif ? " . (estPositif(5) ? "oui" : "non") . PHP_EOL;
echo "-3 est positif ? " . (estPositif(-3) ? "oui" : "non") . PHP_EOL;

echo "Max de 4, 9, 6 : " . maximum(4, 9, 6) . PHP_EOL;
echo "Max (avec max()) : " . maximumAvecMax(4, 9, 6) . PHP_EOL;

echo "7 est premier ? " . (estPremier(7) ? "oui" : "non") . PHP_EOL;
echo "10 est premier ? " . (estPremier(10) ? "oui" : "non") . PHP_EOL;
echo "13 est premier ? " . (estPremier(13) ? "oui" : "non") . PHP_EOL;