<?php

function get_session_keys ()
{
    $mainkey = session_id() ?? 'NULL';
    $localkey = $_SESSION['localkey'] ?? 'NULL';
    
    echo 'PHPSESSID: '.$mainkey;
    echo ' \n ';
    echo 'LOCALID: '.$localkey;
}

?>