<?php   

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Testing\MiniPads\Sounds\Application\Upload\UploadSound;
use Testing\MiniPads\Sounds\Infrastructure\Persistence\DoctrineSoundRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    var_dump($args);
    return $response;
});

$app->post('/uploadsound', function(Request $request, Response $response, $args) {
    $sound = $request->getUploadedFiles()['sound'];
    var_dump($sound->getClientFilename());
    die;
});

$app->run();