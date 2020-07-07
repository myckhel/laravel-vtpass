# Laravel Vtpass

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require myckhel/laravel-vtpass
```

## Setup
The package will automatically register a service provider.

You need to publish the configuration file:

```php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider"```

This is the default content of the config file ```vtpass.php```:

```<?php

return [
  "username"          => env("VTPASS_USERNAME"),
  "password"          => env("VTPASS_PASSWORD"),
];
```
Update Your Projects `.env` with:
```
VTPASS_USERNAME=user@email.extension
VTPASS_PASSWORD=XXXXXXXXXXXXXXXXXXXX
```

## Basic Usage
```
use Vtpass;

Vtpass::verify($parameters);
Vtpass::purchase($parameters);
Vtpass::status($parameters);
Vtpass::variations($parameters);
```

## Available Api's Model
```
Myckhel\Vtpass\Support\MobileAirtime;
Myckhel\Vtpass\Support\MobileData;
Myckhel\Vtpass\Support\Electric;
Myckhel\Vtpass\Support\TvSub;
Myckhel\Vtpass\Support\Education;
```

## Explicit Usage

### Airtime

```
use Myckhel\Vtpass\Support\MobileAirtime;

public function buyAirtime(){ 
  $serviceID = 'mtn'
  $phone = '111111111'
  $amount = 100

  return MobileAirtime::purchase([
    'serviceID'   => $serviceID,
    'phone'       => $phone,
    'amount'      => $amount,
  ]);
}
```
#### Response
```
{  
   "code":"000",
   "response_description":"TRANSACTION SUCCESSFUL",
   "requestId":"SAND0192837465738253A1HSD",
   "transactionId":"1563873435424",
   "amount":"50.00",
   "transaction_date":{  
      "date":"2019-07-23 10:17:16.000000",
      "timezone_type":3,
      "timezone":"Africa/Lagos"
   },
   "purchased_code":""
}
```
#### Status
```
MobileAirtime::status([
  'request_id' => '24545544'
]);
```
#### Verify Electricity
```
use Myckhel\Vtpass\Support\Electric;

$serviceID = 'ikeja-electric'
$meter = '111111111'
$type = 'prepaid'

Electric::verify([
  'serviceID'   => $serviceID,
  'billersCode' => $meter,
  'type'        => $type,
]);
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author instead of using the issue tracker.

## Credits

- [Myckhel][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/myckhel/laravel-vtpass.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/myckhel/laravel-vtpass.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/myckhel/laravel-vtpass/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/myckhel/laravel-vtpass
[link-downloads]: https://packagist.org/packages/myckhel/laravel-vtpass
[link-travis]: https://travis-ci.org/myckhel/laravel-vtpass
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/myckhel
[link-contributors]: ../../contributors
