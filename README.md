> Laravel Env Package

### Installation :

```

composer require elfeqy/env

```

After Installation Open You `app.php` in `config/app.php` And Add This In Your `Providers` Like This :

```php

<?php

'providers' => [

    Elfeqy\Env\EnvServiceProvider::class,

]

```

And Add This Code Into `aliases` Like : 

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
