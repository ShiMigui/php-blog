<?php

function message(string $text, bool $is_an_error = false)
{
    $classes = $is_an_error ? 'message error' : 'message';
    echo "<div class='$classes'>$text</div>";
}
