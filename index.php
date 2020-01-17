<?php
//Start session
session_start();

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Messages.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

require('config.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller) {
    $controller->executeAction();
}