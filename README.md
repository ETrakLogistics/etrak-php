# Please note this library is no longer supported


# eTrak PHP SDK
Use this to make your eTrak integration much easier.

# Docs
This interacts with the API defined here: https://docs.etrak.io/

# Installation
Install with composer.
```shell
composer require parcelmonkeygroup/etrak-php
```

# Environment

To use the sandbox, simply call the sandbox() method when instantiating your connection.
```php

$etrak = \etrak\etrak::instance()->setApiKey(YOUR_API_KEY)->sandbox();

```

# Examples

You'll find various examples in the `/examples` directory within this repository.
