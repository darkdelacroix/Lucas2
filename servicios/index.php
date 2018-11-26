<?php
/**
 * Created by PhpStorm.
 * User: AlbaLuis
 * Date: 06/11/2018
 * Time: 18:48
 */
require_once ('../inc/auth.inc.php');
require_once ('../clases/User.php');
$json = json_encode(array(
    "succes"=>true,
    "msg"=>"Servicios",
));
echo $json;