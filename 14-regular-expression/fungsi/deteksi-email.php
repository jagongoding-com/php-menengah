<?php

function deteksiEmail($input)
{
    $regex = "/[\w]+@[a-z.]+/";
    $timpa = "<a href='mailto:$0'>$0</a>";

    return preg_replace($regex, $timpa, $input);
}