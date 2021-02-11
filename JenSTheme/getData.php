<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 14/12/2020
 * Time: 20:59
 */
echo '<script>var speelLijst = [];</script>';
$i=0;
foreach (databaseRead("`speel lijst`") as $item){

echo "<script> speelLijst[".$i."]=['".$item['date']."','".$item['title']."','".$item['location']."',".$item['price'].",'".$item['url']."',".$item['id']."]</script>";
	$i++;
}
echo '<script> console.log(speelLijst);</script>';
function databaseRead($table) {

	include 'databaseInfo.php';





	try {
		$conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);
		$statement = $conn->prepare("SELECT * FROM `speel lijst`  ");
		$statement->execute();

		$test =$statement->fetchAll();
		return $test;

	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}






}