<?php

/*$email = $_POST['email'] ?? null;
$userName = $_POST['user_name'] ?? null;
$assessText = $_POST['assess_text'] ?? null;*/

// ---- Super worked !!! ----------
$email = $_POST['email'];
$userName = $_POST['user_name'];
$assessText = $_POST['assess_text'];

if (!$email || !$userName || !$assessText) {
die('Invalid parameters');
}

$host = 'alextop.mysql.tools';
$dbName = 'alextop_topalex';
$dbUserName = 'alextop_topalex1971';
$password = '....';
$charset = 'utf8mb4';

$dataSourceName = "mysql:host={$host};dbname={$dbName};charset={$charset}";
$pdo = new PDO($dataSourceName, $dbUserName, $password);

$dataUsers = ['email' => $email, 'user_name' => $userName];
$sqlUsers = "INSERT INTO USERS (email, user_name) VALUES (:email, :user_name)";
$statementUsers = $pdo->prepare($sqlUsers);
$statementUsers->execute($dataUsers);

$dataAssessment = ['text_assessment' => $assessText];
$sqlAssessment = "INSERT INTO assessment (text_assessment) VALUES (:text_assessment)";
$statementAssessment = $pdo->prepare($sqlAssessment);
$statementAssessment->execute($dataAssessment);
