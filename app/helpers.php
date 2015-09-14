<?php

function link_me_to($url, $body, $parameters = null)
{
    $url = url($url);

    $attributes = $parameters ? Html::attributes($parameters) : '';

    return "<a href='{$url}'>{$body}</a>";
}
