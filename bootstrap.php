<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/entities/"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'     => 'pdo_mysql',
    'dbname'     => 'ormbanquedupeuple',  
    'user'       => 'root',  
    'password'   => '@Shadowtech1064997',  
    'host'       => '127.0.0.1',  
    // 'path' => __DIR__ . '/db.sqlite',
);
// $conn = array(
//     'driver' => 'pdo_mysql',
//     'path' => __DIR__ . '/db.sqlite',
// );

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);