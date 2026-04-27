<?php
// Configuration file for tournament details, countries, and pricing

$tournament_name = 'Archer Chess Tournament';
$tournament_date = '2026-05-15';

$countries = [
    'India' => 100,
    'USA' => 150,
    'UK' => 120,
];

function get_price($country) {
    global $countries;
    return $countries[$country] ?? null;
}
?>