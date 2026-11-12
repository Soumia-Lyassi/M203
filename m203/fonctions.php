<?php
declare(strict_types=1);

// ===== Étape 1 : les quatre opérations =====

function additionner(float $a, float $b): float
{
    return $a + $b;
}

function soustraire(float $a, float $b): float
{
    return $a - $b;
}

function multiplier(float $a, float $b): float
{
    return $a * $b;
}

function diviser(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}

// ===== Étape 2 : fonctions logiques =====

function estPair(int $n): bool
{
    return $n % 2 === 0;
}

function estPositif(float $n): bool
{
    return $n > 0;
}

// Version sans max()
function maximum(float $a, float $b, float $c): float
{
    $max = $a;

    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    return $max;
}

// Version avec max()
function maximumAvecMax(float $a, float $b, float $c): float
{
    return max($a, $b, $c);
}

function estPremier(int $n): bool
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

// ===== Étape 3 : calculs commerciaux =====

function calculerTTC(float $ht, float $tva = 20.0): float
{
    return $ht * (1 + $tva / 100);
}

// Retourne le prix après remise, arrondi à 2 décimales
function calculerRemise(float $prix, float $pourcentage): float
{
    return round($prix - ($prix * $pourcentage / 100), 2);
}

// Réutilise calculerRemise et calculerTTC au lieu de répéter leur code
function calculerFacture(float $prixUnitaire, int $quantite, float $remise = 0, float $tva = 20.0): float
{
    $total = $prixUnitaire * $quantite;
    $apresRemise = calculerRemise($total, $remise);

    return calculerTTC($apresRemise, $tva);
}