<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=employees_db;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$countriesQuery = "SELECT DISTINCT Country FROM employees";
$citiesQuery = "SELECT DISTINCT City FROM employees";

$countriesStmt = $pdo->query($countriesQuery);
$citiesStmt = $pdo->query($citiesQuery);

$countries = '';
$cities = '';

$countriesResult = $countriesStmt->fetchAll();
$citiesResult = $citiesStmt->fetchAll();

if ($countriesResult) {
    foreach ($countriesResult as $row) {
        $countries .= "<label><input type='checkbox' value='{$row['Country']}'> {$row['Country']}</label><br/>";
    }
}

if ($citiesResult) {
    foreach ($citiesResult as $row) {
        $cities .= "<label><input type='checkbox' value='{$row['City']}'> {$row['City']}</label><br/>";
    }
}

echo json_encode(['countries' => $countries, 'cities' => $cities]);
?>
