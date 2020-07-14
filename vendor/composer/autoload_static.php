<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ea25b169fb1b50b396b450c0960f67f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mvc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ea25b169fb1b50b396b450c0960f67f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ea25b169fb1b50b396b450c0960f67f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
