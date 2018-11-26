<?php
/**
 * Created by PhpStorm.
 * User: AlbaLuis
 * Date: 17/11/2018
 * Time: 20:01
 */

require_once('../clases/Vehiculo.php');
require_once ('../inc/auth.inc.php');
// Parámetros de entrada
//$email = isset($_POST["email"]) ? $_POST["email"] : null;
$action = isset($_POST["action"]) ? $_POST["action"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$json = array(
    "succes" => false,
    "msg" => "",
    "authkey" => ""
);
try {
    //crear un switch dependiendo de la accion

    $user = User::checkLogin($email, $password);//devuelve un objeto de clase User y podemos acceder a sus metodos
    if (isset($user)) {
        $json['msg'] = 'Bienvenido';
        $json['succes'] = true;
        $json['authkey'] = $user->getToken();
    } else {
        $json['msg'] = 'No encontrado';
        $json['succes'] = false;
    }
} catch (PDOException $e) {
    $json['msg'] = 'Ha ocurrido un error.' . $e->getMessage();//el valor de mensaje de error del objeto $e no seria necesario para el usuario
    $json['succes'] = false;
}
echo json_encode($json);
