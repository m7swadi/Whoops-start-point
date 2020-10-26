<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e9f8bdadb3bd4b7a1e3bd3a4d73d966
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e9f8bdadb3bd4b7a1e3bd3a4d73d966::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e9f8bdadb3bd4b7a1e3bd3a4d73d966::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
