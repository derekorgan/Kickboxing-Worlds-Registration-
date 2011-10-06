<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$theurl = explode('/', $_SERVER['PHP_SELF']);
$mydir = $theurl[1];


if ($mydir == "kickboxing")  //live
{    
    $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
    sfContext::createInstance($configuration)->dispatch();
}
else // dev 
{    
    $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
    sfContext::createInstance($configuration)->dispatch();
}



