<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/**
 * Created by PhpStorm.
 * User: tylerdotson
 * Date: 10/24/15
 * Time: 7:19 PM
 */

require_once('vendor/autoload.php');

$app = new \Slim\Slim();

require_once("routes/students.php");

$app->run();

