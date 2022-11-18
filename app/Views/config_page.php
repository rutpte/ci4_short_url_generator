<?php 
use App\Libraries\Config;  
$config = new Config();
//var_dump($config);
$ROOT_PROJ = $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]."/".$config->PROJ_NAME."/public";
define('PROJ_NAME',  $config->PROJ_NAME);
define('ROOT_PROJ',  $ROOT_PROJ);
