<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$u_name = $_POST["user_name"]; //set PHP variables like this so we can use them anywhere in code below
	$u_email = $_POST["email"];
	$a_text = $_POST["assess_text"];
	
	//print output text
	print "Hello " . $u_name . "!, we have received your message and email ". $u_email;
	print "We will contact you very soon!: " a_text;
}*/

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
if ($_POST['user_name'] && $_POST['email'] && $_POST['assess_text']&& $_POST['assess_value']) {
$data = [
'user_name' => $_POST['user_name'],
'email' => $_POST['email'],
'assess_text' => $_POST['assess_text'],
'assess_value' => $_POST['assess_value'],
];
//через PDO, (або можна через mysqli ...), записуємо в БД
//$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
//$stmt= $pdo->prepare($sql);
//$stmt->execute($data);
}
>
