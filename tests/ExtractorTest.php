<?php

declare(strict_types=1);

use Piscibus\PhpHashtag\Extractor;

test('extract with english text', function () {
    $actual = Extractor::getHashtags(
        'This is a #test and another #test2 and #foo_bar and #FooBar and #foo@bar #__ #foo__bar #2023 #👋 #foo_👋'
    );

    $this->assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#__', '#foo__bar', '#2023', '#foo_'],
        $actual
    );
});

test('extract with arabic text', function () {
    $actual = Extractor::getHashtags('هذا هو #تجربة و #تجربة2 و #foo_bar و #FooBar و #foo و #كلمة_و_أخرى');

    $this->assertEquals(
        ['#تجربة', '#تجربة2', '#foo_bar', '#FooBar', '#foo', '#كلمة_و_أخرى'],
        $actual
    );
});

test('extract with french text', function () {
    $actual = Extractor::getHashtags('Ceci est un #test et un autre #test2 et #foo_bar et #FooBar et #foo et #superposés');

    $this->assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#superposés'],
        $actual
    );
});

test('extract with german text', function () {
    $actual = Extractor::getHashtags(
        'Dies ist ein #test und ein anderer #test2 und #foo_bar und #FooBar und #foo und #überlappend'
    );

    $this->assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#überlappend'],
        $actual
    );
});

test('extract with turkish text', function () {
    $actual = Extractor::getHashtags('Bu bir #test ve başka bir #test2 ve #foo_bar ve #FooBar ve #foo ve #üstüste');

    $this->assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#üstüste'],
        $actual
    );
});

test('extract with spanish text', function () {
    $actual = Extractor::getHashtags('Esto es un #test y otro #test2 y #foo_bar y #FooBar y #foo y #superpuestos');

    $this->assertEquals(
        ['#test', '#test2', '#foo_bar', '#FooBar', '#foo', '#superpuestos'],
        $actual
    );
});
