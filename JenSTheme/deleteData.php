<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 11/02/2021
 * Time: 12:23
 */
$deleteId =$_POST['id'];


databaseYeet($deleteId);

function databaseYeet($id) {
	include 'databaseInfo.php';



	try {
		$conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
		$statement = $conn->prepare("DELETE FROM `speel lijst` WHERE id=:id  ");
		$statement->bindParam(":id",$id);
		$statement->execute();
echo "gelukt  ".$id;

	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}






}

header("Location: /stageproject/speellijst");
die();
