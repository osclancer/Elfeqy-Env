> Laravel Env Package

### Installation :

```

composer require elfeqy/env

```

if you're using Laravel 5.5 or above, you're ready to go.

otherwise you have to open `config/app.php` and add a new line in `aliases` :

```php

<?php

'aliases' => [

    'Env'   => \Elfeqy\Env\Env::class,

];

```

## Usage

> You Can Use This Code To Get Env Key Value Like: 

```php

Env::get('app_name');

// This Will Return Your App Name . ex:laravel

```

> To Change A Value In `.env` File, You Can Use This Code By Passing `$key` And `$value` Like:

```php

<?php

use Elfeqy\Env\Env;

Env::overwrite($key, $value);

```
