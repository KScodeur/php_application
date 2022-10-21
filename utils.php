<?php
function session_php() : bool
{
    if(!session_id())
    {
        session_start();
        session_regenerate_id();
        return true;
    }

    return false;
}

function  destroy_session() : void
{
    session_unset();

    session_destroy();
}

function is_logged(): bool
{
    return true;
}



?>