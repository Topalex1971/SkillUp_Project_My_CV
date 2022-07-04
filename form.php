<?php
// ---- This is 2 version -----

//Підключаємлсь до бази даних (БД)
$host = 'alextop.mysql.tools';
$db = 'alextop_topalex';
$user = 'alextop_topalex1971';
$pass = 'TataSvetMoihOchey1971';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];
try {
$pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

//Отримуємо дані з форми: user_name, email, assess_text, assess_value
//Отримуємо дані через суперглобальний масив $_POST
if ($_POST['user_name'] && $_POST['email'] && $_POST['assess_text']) {
$data = [
'user_name' => $_POST['user_name'],
'email' => $_POST['email'],
'assess_text' => $_POST['assess_text'],
//'assess_value' => $_POST['assess_value'],
];
//через PDO, (або можна через mysqli ...), записуємо в БД
$sql = "INSERT INTO USERS (user_name, email) VALUES (:user_name, :email)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
$sql = "INSERT INTO assessment (text_assessment) VALUES (:text_assessment)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
}
