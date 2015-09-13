<?php

function link_me_to($url, $body)
{
    $url = url($url);
    return "<a href='{$url}'>{$body}</a>";
}
