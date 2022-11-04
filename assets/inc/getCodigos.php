<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["campo"];

$sql = "SELECT inve_catego,inve_seguridad,inve_nombre FROM inventario WHERE inve_catego LIKE ? OR inve_nombre LIKE ? ORDER BY inve_catego ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->execute([$campo . '%', $campo . '%']);
	$html = "";
	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		$html .= "<a class='link__modal' href='Producto/" . $row["inve_seguridad"] . "/'>" . str_replace("-", " ", utf8_encode($row["inve_catego"])) . " - " . $row["inve_nombre"] . "<img src='assets/img/lg/meisa/link.svg' class='link__external' loading='lazy'></a> <br/>";
	}
echo json_encode($html, JSON_UNESCAPED_UNICODE);


