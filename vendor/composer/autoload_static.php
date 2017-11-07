<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7df5fcc83e0c4fc1038fa7cd085a92ec
{
    public static $files = array (
        '2d140c8bda1d34303f9fb64b919e4613' => __DIR__ . '/..' . '/zai/core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zai\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zai\\' => 
        array (
            0 => __DIR__ . '/..' . '/zai/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7df5fcc83e0c4fc1038fa7cd085a92ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7df5fcc83e0c4fc1038fa7cd085a92ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
