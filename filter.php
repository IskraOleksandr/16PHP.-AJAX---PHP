<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=employees_db;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$countries = isset($_GET['countries']) ? $_GET['countries'] : [];
$cities = isset($_GET['cities']) ? $_GET['cities'] : [];
$sortField = isset($_GET['sortField']) ? $_GET['sortField'] : 'id';
$sortOrder = isset($_GET['sortOrder']) ? $_GET['sortOrder'] : 'asc';

$query = "SELECT * FROM employees WHERE 1=1";

if (!empty($countries)) {
    $countryFilter = implode("','", $countries);
    $query .= " AND Country IN ('$countryFilter')";
}

if (!empty($cities)) {
    $cityFilter = implode("','", $cities);
    $query .= " AND City IN ('$cityFilter')";
}

$query .= " ORDER BY $sortField $sortOrder";

$stmt = $pdo->prepare($query);
$stmt->execute();

$rows = $stmt->fetchAll();
$data = '';

if ($rows) {
    foreach ($rows as $row) {
        $data .= "<tr>
                <td class='border border-gray-400 p-2'>{$row['Name']}</td>
                <td class='border border-gray-400 p-2'>{$row['Surname']}</td>
                <td class='border border-gray-400 p-2'>{$row['Country']}</td>
                <td class='border border-gray-400 p-2'>{$row['City']}</td>
                <td class='border border-gray-400 p-2'>{$row['Salary']}</td>
            </tr>";
    }
} else {
    $data .= "<tr><td colspan='5'>No results found</td></tr>";
}

echo json_encode(['data' => $data]);
?>
