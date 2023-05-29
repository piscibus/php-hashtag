<?php

declare(strict_types=1);

namespace Piscibus\PhpHashtag;

class Extractor
{
    /**
     * Extracts the hashtags from a string.
     *
     * @return array<string>
     */
    public static function extract(string $text): array
    {
        preg_match_all('/(#[\p{L}\d_]+)/u', $text, $matches);

        return $matches[0];
    }
}
