<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: *");

if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    header('HTTP/3 405 Method Not Allowed');
    die("Request method not allowed");
}

session_start();

if(!isset($_SESSION['localkey']))
{
    $_SESSION['localkey'] = md5(rand(10000,99999));
}

define('FROM_ADMIN', TRUE);

$action = $_POST['action'];
$args = json_decode($_POST['args']);

require_once './actions.php';
action_start($action, $args);

?>