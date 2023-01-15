<?php

use Piscibus\PhpHashtag\Extractor;

if (! function_exists('extractHashtags')) {
    function extractHashtags(string $text): array {
        return Extractor::extract($text);
    }
}