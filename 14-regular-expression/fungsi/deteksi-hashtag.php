<?php

function deteksiHashtag($input)
{
    $regex = "/#([a-zA-Z0-9_]+)/";
    $timpa = "<a href='https://twitter.com/hashtag/$1'>$0</a>";

    return preg_replace($regex, $timpa, $input);
}