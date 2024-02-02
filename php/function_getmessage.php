
<?php

function requested_message ()
{
    http_response_code(200);

    echo "'Barbarianism is the natural state of mankind.";
    echo " Civilization is unnatural. It is the whim of circumstance.";
    echo " And barbarianism must ultimately triumph.'";
    echo " - Robert E. Howard";

    die();
}

?>