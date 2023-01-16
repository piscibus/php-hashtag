# PHP Hashtag

[![Latest Version on Packagist](https://img.shields.io/packagist/v/piscibus/php-hashtag.svg?style=flat-square)](https://packagist.org/packages/piscibus/php-hashtag)
[![Total Downloads](https://img.shields.io/packagist/dt/piscibus/php-hashtag.svg?style=flat-square)](https://packagist.org/packages/piscibus/php-hashtag)
[![CI](https://github.com/piscibus/php-hashtag/actions/workflows/ci.yml/badge.svg)](https://github.com/piscibus/php-hashtag/actions/workflows/ci.yml)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/piscibus/php-hashtag/php?style=flat-square)

This package provides a simple way to extract hashtags from a string in any language.

## Installation

You can install the package via composer:

```bash
composer require piscibus/php-hashtag
```

## Support us

We invest a lot of resources into creating open source projects. This package is extracted from a bigger project. We are
using it in production, and we will continue to maintain it. If you find it useful, please consider supporting us.
All kinds of contributions are welcome.

## Usage

```php
use Piscibus\PhpHashtag\Extractor;

$text = 'This is an #English #text with #hashtags';

$hashtags = Extractor::extract($text); // ['English', 'text', 'hashtags']

// OR use helper function

$hashtags = extract_hashtags($text); // ['English', 'text', 'hashtags']
```

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
