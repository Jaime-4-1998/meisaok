<?php

try {
    $mbd = new PDO('mysql:host=localhost;dbname=u557675164_titulacion; charset=UTF8','root','');
} catch (exception $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>



