<?php
namespace MiniPads\Shared\Infrastructure\Doctrine;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DoctrineEntityManagerFactory
{
    public function setupEntityManager() {

        $isDevMode                  = true;
        $proxyDir                   = null;
        $cache                      = null;
        $useSimpleAnnotationReader  = false;
        $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
       
        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/db.sqlite',
        );

        $entityManager = EntityManager::create($conn, $config);
        
        }
}

