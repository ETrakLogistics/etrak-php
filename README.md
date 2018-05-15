# eTrak PHP SDK
Use this to make your eTrak integration much easier.

# Docs
This interacts with the API defined here: https://docs.etrak.io/

# Installation
Install with composer.
```shell
composer require parcelmonkeygroup/etrak
```

# Example Usage

## Obtain a temporary API key with your eTrak login:
```php
// Set up your connection
$etrak = \etrak\etrak::instance();
$r = \etrak\AuthenticateUser::create([
  'email' => 'rich@parcelmonkey.com',
  'password' => 'hello1'
]);
print_r($r);
```

*Outputs:*
```
stdClass Object
(
    [apikey] => 7D54D-DCF08-A2C11-7B61A-2DA5D-9EDDE
    [expires] => 2018-05-16 16:01:27
)
```

## Obtain a permanent API key using a temporary one:
```php
// Set up your connection
$etrak = \etrak\etrak::instance()->setApiKey(YOUR_TEMPORARY_API_KEY);
$r = \etrak\ApiKey::create([
  'reference' => 'reference for this API key'
]);
print_r($r);
```

*Outputs:*
```
stdClass Object
stdClass Object
(
    [apikey] => 7D54D-DCF08-A2C11-7B61A-2DA5D-9EDDE
    [expires] => 2118-05-16 16:01:27
)
```