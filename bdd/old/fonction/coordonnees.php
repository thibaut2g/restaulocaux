<!-- Recupere les coordonnees de chaque lieu et les places dans un tableau -->

<?php 
	require 'pdo.php';
	$req = $bdd->query("SELECT * FROM lieux");
	$table = [];
	while ($rep = $req->fetch()) {
		$json = [];
		$json["type"] = $rep["type"];
		$json["nom"] = $rep["nom"];
		$json["latitude"] = $rep["latitude"];
		$json["longitude"] = $rep["longitude"];
		$json["infos"] = $rep["infos"];
		array_push($table, $json);
	}
	$json = json_encode($table);
	file_put_contents("../json/coo.json", $json);
 ?>