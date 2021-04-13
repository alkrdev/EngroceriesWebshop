<?php
define('ROOT_DIR', dirname(__DIR__));
define('VIEW_DIR', ROOT_DIR . '/resources/views');
define('COMPONENT_DIR', ROOT_DIR . '/resources/components');
require ROOT_DIR. '/vendor/autoload.php';
session_start();

$dotenv = \Dotenv\Dotenv::createImmutable(ROOT_DIR);
$dotenv->load();

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::setDefaultNamespace('\App\Controllers'); // <-- Tilføj dette

require_once('../app/helpers.php');
require_once '../routes/web.php';

// Start the routing
Router::start();
