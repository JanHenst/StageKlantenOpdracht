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
$url=$_POST['url'];

$date=str_replace("-", "", $date);



if($date&&$title&&$location&&$price&&$redirect) {
	databaseWright( $date, $title, $location, $price, $url,$redirect );
}



	function databaseWright($date,$title,$location,$price,$url,$redirect){

		include 'databaseInfo.php';






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
