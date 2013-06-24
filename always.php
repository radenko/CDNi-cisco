<?php
    require_once('config.php');
    require_once('core/Core.php');
    Core::init($config);
    
    require_once 'CiscoCDNi.php';
    
    $intercon = new CiscoCDNi($config['CDN']); //Call construct function interconnection.php via CiscoCDNi.php
?>
