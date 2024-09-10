<?php

namespace App\Models;

class Calculator
{
    public function convertCurrency($amount, $fromCurrency, $toCurrency)
    {
        // Simulación de conversión de divisa
        $rate = 0.85; // USD a EUR
        return $amount * $rate;
    }

    public function calculateBMI($weight, $height)
    {
        return $weight / ($height * $height);
    }
}
