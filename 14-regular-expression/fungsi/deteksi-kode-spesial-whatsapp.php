<?php

function deteksiKodeSpesialWA($input)
{
    $regex = [
        "/_([\w\s]+)_/",
        "/\*([\w\s]+)\*/",
        "/\~([\w\s]+)\~/"
    ];

    $timpa = [
        "<i>$1</i>",
        "<strong>$1</strong>",
        "<strike>$1</strike>"
    ];

    return preg_replace($regex, $timpa, $input);
}