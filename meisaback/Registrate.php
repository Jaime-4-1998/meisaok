
<?php
require 'components/php/Sesion.php';
require 'components/php/functions.php';
require 'components/php/Conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tokenmeisa = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
    $identificador = limpiarDatos($_POST['matri']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];
    $errores = '';
    // validar los campos de texto
    if (empty($identificador) || empty($password) || empty($rol)) {
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else{
        // validacion de que el usuario no exista
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('SELECT * FROM users WHERE identificador = :identificador');
        $statement->execute([
            ':identificador' => $identificador
        ]);
        $resultado = $statement->fetch();
        if ($resultado != false) {
            $errores .= '<li class="error">Este registro ya existe</li>';
            header('Location: '.RUTA.'Registrate');
        }
    }
    if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO users (id, token, identificador, pass_cont, type) 
        VALUES(null, :token,:identificador, :pass_cont, :type)');
        $statement->execute([
            ':token' => $tokenmeisa,
            ':identificador' => $identificador,
            ':pass_cont' => $password,
            ':type' => $rol
        ]);
        if($rol == 'meisa'){
            $stmt = $mbd->prepare('INSERT INTO meisaad (id_token,id_name) VALUES(:token,:identificador)');
            $stmt->execute([
                ':token' => $tokenmeisa,
                ':identificador' => $identificador
            ]);
        }
        header('Location: '.RUTA.'index');
    }   
}
require 'vistas/Registrate.vistas.php';
?>

