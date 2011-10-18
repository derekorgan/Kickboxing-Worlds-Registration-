<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$theurl = explode('/', $_SERVER['PHP_SELF']);
$mydir = $theurl[1];

if ($mydir == "kickboxing")  //live
{    
        $configuration = ProjectConfiguration::getApplicationConfiguration('admin', 'prod', false);
            sfContext::createInstance($configuration)->dispatch();
}
else // dev 
{    
        $configuration = ProjectConfiguration::getApplicationConfiguration('admin', 'dev', true);
            sfContext::createInstance($configuration)->dispatch();
}

