<?php

namespace Elfeqy\Env;

use App\Http\Controllers\Controller;

class Env extends Controller
{

    public static function get($col)
    {
        return env(strtoupper($col));
    }

    public static function overwrite($type, $value)
    {
        $env = base_path('.env');

        if(file_exists($env))
        {
            $value = trim($value);

            if(strpos(file_get_contents($env), $type) !== false && strpos(file_get_contents($env), $type) >= 0)
            {
                file_put_contents($env, str_replace(
                    $type . '=' . self::get($type),
                    $type . '=' . $value,
                    file_get_contents($env)
                ));
            }
            else
            {
                file_put_contents($env, file_get_contents($env) . "\r\n" . $type . '=' . $value);
            }
        }

    }

}
