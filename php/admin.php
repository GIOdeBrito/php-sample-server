
<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    header('HTTP/2 403 Forbidden');
    die("Request method not allowed");
}

/*if($_SERVER['REMOTE_ADDR'] !== '127.0.0.1')
{
    header('HTTP/2 403 Forbidden');
    die("Request not from local");
}*/

define('FROM_ADMIN', TRUE);

$action = $_POST['action'];
$args = json_decode($_POST['args']);

require_once './actions.php';
action_start($action, $args);

?>