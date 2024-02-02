<?php

$registered_actions = array
(
    'gettime' => function ()
    {
        require_once './function_get_time.php';
        get_time();
    },
    
    'dumppost' => function () use ($action, $args)
    {
        require_once './function_dump_post.php';
    },
    
    'getmessage' => function ()
    {
        require_once './function_getmessage.php';
        requested_message();
    },

    'getsession' => function ()
    {
        require_once './function_session_key.php';
        get_session_keys();
    },
);

?>