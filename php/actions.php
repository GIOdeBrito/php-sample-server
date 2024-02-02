<?php

if(!defined('FROM_ADMIN'))
{
    header('HTTP/3 403 Forbidden');
    die("Permission not granted by admin");
}

function action_start ($action, $args)
{
    require_once './actions_registered.php';

    try
    {
        if(!array_key_exists($action, $registered_actions))
        {
            throw "Action not found";
        }

        $registered_actions[$action]();
    }
    catch(Exception $ex)
    {
        header('HTTP/2 404 Not found');
        echo json_encode(array('action' => $ex->getMessage(), 'args' => (object) array()));
        die();
    }
}

?>