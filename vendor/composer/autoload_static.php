<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab928478863c7c3bd526d479fda62b88
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab928478863c7c3bd526d479fda62b88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab928478863c7c3bd526d479fda62b88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
