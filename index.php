<?php

$bad = [
    "hi",
    "he",
    "wow",
];

function filter($message): string
{
    global $bad;

    $output = [];
    foreach (explode(" ", strtolower(trim($message))) as $word) {
        if (in_array($word, $bad)) {
            $word = '****';
        }
        $output[] = $word;
    }
    return implode(' ', $output);
}

echo filter("Hello world here Hi gfdg he gf h he");

