<?php

declare(strict_types=1);

use function PHPUnit\Framework\assertEquals;

use Piscibus\PhpHashtag\Extractor;

test('extract with english text', function () {
    $actual = Extractor::extract(
        'This is a #test and another #test2 and #foo_bar and #FooBar and #foo@bar #__ #foo__bar #2023 #👋 #foo_👋'
    );

    assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#__', '#foo__bar', '#2023', '#foo_'],
        $actual
    );
});

test('extract with arabic text', function () {
    $actual = Extractor::extract('هذا هو #تجربة و #تجربة2 و #foo_bar و #FooBar و #foo و #كلمة_و_أخرى');

    assertEquals(
        ['#تجربة', '#تجربة2', '#foo_bar', '#FooBar', '#foo', '#كلمة_و_أخرى'],
        $actual
    );
});

test('extract with french text', function () {
    $actual = Extractor::extract('Ceci est un #test et un autre #test2 et #foo_bar et #FooBar et #foo et #superposés');

    assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#superposés'],
        $actual
    );
});

test('extract with german text', function () {
    $actual = Extractor::extract(
        'Dies ist ein #test und ein anderer #test2 und #foo_bar und #FooBar und #foo und #überlappend'
    );

    assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#überlappend'],
        $actual
    );
});

test('extract with turkish text', function () {
    $actual = Extractor::extract('Bu bir #test ve başka bir #test2 ve #foo_bar ve #FooBar ve #foo ve #üstüste');

    assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#üstüste'],
        $actual
    );
});

test('extract with spanish text', function () {
    $actual = Extractor::extract('Esto es un #test y otro #test2 y #foo_bar y #FooBar y #foo y #superpuestos');

    assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#superpuestos'],
        $actual
    );
});
