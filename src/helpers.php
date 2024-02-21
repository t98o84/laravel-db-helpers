<?php

if (! function_exists('escape_like_query')) {
    function escape_like_query(string $value, string $escape = '\\'): string
    {
        return str_replace(
            [$escape, '%', '_'],
            [$escape.$escape, $escape.'%', $escape.'_'],
            $value
        );
    }
}
