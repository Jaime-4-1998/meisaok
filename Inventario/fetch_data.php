<?php
$connect = new PDO("mysql:host=localhost;dbname=u557675164_titulacion", "root", "");
if (isset($_POST["action"])) {
    $query = "
        SELECT * FROM inventario WHERE inve_estatus = 'Disponible'
    ";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
         AND inve_precio BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
        ";
    }
    if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "
         AND inve_catego IN('" . $brand_filter . "')
        ";
    }
    if (isset($_POST["ram"])) {
        $ram_filter = implode("','", $_POST["ram"]);
        $query .= "
         AND inve_marca IN('" . $ram_filter . "')
        ";
    }
    if (isset($_POST["storage"])) {
        $storage_filter = implode("','", $_POST["storage"]);
        $query .= "
         AND inve_year IN('" . $storage_filter . "')
        ";
    }
    $statement = $connect->prepare($query);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
            extract($result);
		?>
       		<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
                <img loading="lazy" src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result['inve_img'];?>" alt="<?phpecho $inve_nombre;?>" class="img_responsive" >
                <h4 style="text-align:center;" class="text-danger" ><?php echo str_replace("-", " ", $result['inve_nombre']); ?></h4>
                <a href="../Maquina/<?php echo strtolower($result['inve_nombre']);?>/" title="click para ver más">Ver Más</a>
        	</div>
		<?php
				}
			} else {
		?>
		<div class="col-xs-12">
			<div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Datos no encontrados ... </div>
		</div>
<?php
    }
}
?>