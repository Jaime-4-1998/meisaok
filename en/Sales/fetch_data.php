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
    $statement = $connect->prepare($query);
    $statement->execute();
    if ($statement->rowCount() > 0) {
        while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
            extract($result);
		?>
       		
               
                    <div class="flex__1">
                        <div class="card__flex">
                            <div class="card__flex__head">
                                <img loading="lazy" src="http://localhost/meisa/meisaback/adminmeisa/assets/<?php echo $result['inve_img'];?>" alt="<?php echo str_replace("-", " ", $result['inve_nombre']); ?>" title="<?php echo str_replace("-", " ", $result['inve_nombre']); ?>" width="100" height="100" / >
                                <h2><?php echo str_replace("-", " ", $result['inve_nombre']); ?></h2>
                            </div>
                            <div class="card__flex__body">
                                    <!--<p>Modelo: <strong>< echo $inve_modelo;></strong></p>-->
                                    <p><?php echo $inve_desc; ?></p>
                                    <a href="../Machine/<?php echo strtolower($result['inve_nombre']);?>/" title="click for more">View More</a>
                                    <div class="esp__inv"></div>
                            </div>
                        </div>
                    </div>
		<?php
				}
			} else {
		?>
        <div class="not__found">
            <div class="alert__meisa">
                <p>Por el Momento no podemos mostrarte nuestras maquinas.</p>
            </div>
        </div>
		
<?php
    }
}
?>