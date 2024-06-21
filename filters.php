<?php
//header('Content-Type: application/json');//
$dsn = 'mysql:host=localhost;dbname=employees_db';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
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
