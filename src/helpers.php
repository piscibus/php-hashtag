<?php

declare(strict_types=1);

use Piscibus\PhpHashtag\Extractor;

if (! function_exists('extract_hashtags')) {
    function extract_hashtags(string $text): array
    {
        return Extractor::extract($text);
    }
}
