# Google addon alternative PHP library (alpha release from google)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/manish-pareek/gsuite-addon-alternative-php.svg?style=flat-square)](https://packagist.org/packages/manish-pareek/gsuite-addon-alternative-php)
[![Build Status](https://img.shields.io/travis/manish-pareek/gsuite-addon-alternative-php/master.svg?style=flat-square)](https://travis-ci.org/manish-pareek/gsuite-addon-alternative-php)
[![Quality Score](https://img.shields.io/scrutinizer/g/manish-pareek/gsuite-addon-alternative-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/manish-pareek/gsuite-addon-alternative-php)
[![Total Downloads](https://img.shields.io/packagist/dt/manish-pareek/gsuite-addon-alternative-php.svg?style=flat-square)](https://packagist.org/packages/manish-pareek/gsuite-addon-alternative-php)

By using this library, you will get a quick start and focus on the developing your business logic rather than creating JSONs as response. This is a same naming conventions what google addon has for the app script.

## Installation

You can install the package via composer:

```bash
composer require manish-pareek/gsuite-addon-php
```

## Usage

``` php
use ManishPareek\Gsuite\Addon\Card;
use ManishPareek\Gsuite\Addon\Image;
use ManishPareek\Gsuite\Addon\Navigation;
use ManishPareek\Gsuite\Addon\ResponseAction;
use ManishPareek\Gsuite\Addon\ResponseBuilder;
use ManishPareek\Gsuite\Addon\Section;
use ManishPareek\Gsuite\Addon\Widget;

$imageWidget = (new Widget())->setImage(
    (new Image())->setImageUrl("https://storage.googleapis.com/gweb-uniblog-publish-prod/images/logo_Google_FullColor_3x_830x271px.max-2800x2800.png")
);
$widgetSection = (new Section())->addWidget($imageWidget);

$homeCard = (new Card())->addSection($widgetSection);

$navigation = (new Navigation())->setPushCard($homeCard);
$responseAction = (new ResponseAction())->addNavigation($navigation);
$responseBuilder = (new ResponseBuilder())->setAction($responseAction);

return $responseBuilder->send();
        
```


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email pareek.manish558@gmail.com instead of using the issue tracker.

## Credits

- [Manish Pareek](https://github.com/manish-pareek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
