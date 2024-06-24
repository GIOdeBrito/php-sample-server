<?php

require_once './include/admin_access_permission.php';

$registered_actions = array
(
    'gettime' => function (): void
    {
        require_once './services/get_time.php';
        get_time();
    },
    
    'dumppost' => function () use ($action, $args): void
    {
        require_once './services/dump_post.php';
    },
    
    'getmessage' => function (): void
    {
        require_once './services/getmessage.php';
        requested_message();
    },

    'getsession' => function (): void
    {
        require_once './services/session_key.php';
        get_session_keys();
    },
);

?>