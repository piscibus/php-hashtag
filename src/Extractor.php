<?php

declare(strict_types=1);

namespace Piscibus\PhpHashtag;

class Extractor
{
    /**
     * Extract the hashtag from a string.
     */
    public static function extract(string $text): array
    {
        $hashtags = [];
        preg_match_all('/(#[\p{L}\d_]+)/u', $text, $matches);

        foreach ($matches[0] as $match) {
            $hashtags[] = $match;
        }

        return $hashtags;
    }

    /**
     * Enable static calls.
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return static::$name($arguments);
    }
}
