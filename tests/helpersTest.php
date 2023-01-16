<?php

declare(strict_types=1);

use Piscibus\PhpHashtag\Extractor;

test('extract_hashtags works the same as extractor', function ($input) {
    expect(extract_hashtags($input))->toBe(Extractor::extract($input));
})->with([
    'This is a #test and another #test2 and #foo_bar and #FooBar and #foo@bar #__ #foo__bar #2023 #👋 #foo_👋',
    'هذا هو #تجربة و #تجربة2 و #foo_bar و #FooBar و #foo و #كلمة_و_أخرى',
    'Ceci est un #test et un autre #test2 et #foo_bar et #FooBar et #foo et #superposés',
    'Dies ist ein #test und ein anderer #test2 und #foo_bar und #FooBar und #foo und #überlappend',
    'Bu bir #test ve başka bir #test2 ve #foo_bar ve #FooBar ve #foo ve #üstüste',
    'Esto es un #test y otro #test2 y #foo_bar y #FooBar y #foo y #superpuestos',
]);
