<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 14/12/2020
 * Time: 15:04
 */


$date = $_POST['date'];
$title = $_POST['title'];
$location = $_POST['location'];
$price = $_POST['price'];
$redirect = $_POST['redirect'];
//$wright=$_POST['wright'];

$date=str_replace("-", "", $date);


$url="www.google.nl";

if($date&&$title&&$location&&$price&&$redirect) {
	databaseWright( $date, $title, $location, $price, $url,$redirect );
}



	function databaseWright($date,$title,$location,$price,$url,$redirect){


		$servername = "localhost";
		$username = "root";
		$password = "";
		$database="SpeelLijst";


		try {
			$conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);

			$statement = $conn->prepare( "INSERT INTO `speel lijst` (date, title, location,price,url) 
            VALUES (?,?,?,?,?)");

			

			$statement->execute([$date,$title,$location,$price,$url]);




		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}




}


header("Location:$redirect");
die();



?>