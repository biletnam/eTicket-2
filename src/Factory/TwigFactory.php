<?php

namespace App\Factory;

class TwigFactory
{
    public static function create()
    {
        $loader     = new \Twig_Loader_Filesystem([
            __DIR__.'/../templates',
        ]);

        return new \Twig_Environment($loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }
}
