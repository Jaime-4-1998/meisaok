<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=u557675164_titulacion", "root", "");

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM inventario WHERE inve_estatus = 'Disponible'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND inve_precio BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND inve_catego IN('".$brand_filter."')
		";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND inve_marca IN('".$ram_filter."')
		";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND inve_year IN('".$storage_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img loading="lazy" src="http://localhost/meisa/meisaback/adminmeisa/assets/'. $row['inve_img'] .'" alt="'. $row['inve_nombre'] .'" class="img_responsive" >
					<h4 style="text-align:center;" class="text-danger" >'. $row['inve_nombre'] .'</h4>
					
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No has ingresado algun dato</h3>';
	}
	echo $output;
}

?>