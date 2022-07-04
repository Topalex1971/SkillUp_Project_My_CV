<?php
// ---- This is 1-st version -----
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "alextop.mysql.tools";
	$mysql_database = "alextop_topalex";    
	$mysql_username = "alextop_topalex1971";
	$mysql_password = "TataSvetMoihOchey1971";

	$u_name = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	$u_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$u_text = filter_var($_POST["assess_text"], FILTER_SANITIZE_STRING);
    //$u_value = filter_var($_POST["assess_value"], FILTER_SANITIZE_STRING);

	if (empty($u_name)){
		die("Please enter your name");
	}
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
		
	if (empty($u_text)){
		die("Please enter text");
	}	
    
    /*if (empty($u_value)){
		die("Please enter value range CV");
	}

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO users_data (user_name, user_email, user_message) VALUES(?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sss', $u_name, $u_email, $u_text); //bind values and execute insert query
	var_dump($statement)
	if($statement->execute()){
		print "Hello " . $u_name . "!, your message has been saved!";
	}else{
		print $mysqli->error; //show mysql error if any
	}
}*/

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$u_name = $_POST["user_name"]; //set PHP variables like this so we can use them anywhere in code below
	$u_email = $_POST["email"];
	$a_text = $_POST["assess_text"];
	
	//print output text
	print "Hello " . $u_name . "!, we have received your message and email ". $u_email;
	print "We will contact you very soon!: " $a_text;
}*/

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
//if ($_POST['user_name'] && $_POST['email'] && $_POST['assess_text']&& $_POST['assess_value']) {
if ($_POST['user_name'] && $_POST['email'] && $_POST['assess_text']) {
$data = [
'user_name' => $_POST['user_name'],
'email' => $_POST['email'],
'assess_text' => $_POST['assess_text'],
//'assess_value' => $_POST['assess_value'],
];
//через PDO, (або можна через mysqli ...), записуємо в БД
//$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
//$stmt= $pdo->prepare($sql);
//$stmt->execute($data);
}


?>
