<?php

if (!function_exists('formatCurrency')) {

    function formatCurrency($value): string
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}

if (!function_exists('formatPercent')) {

    function formatPercent($value): string
    {
        return number_format($value, 2, ',', '.') . '%';
    }
}
