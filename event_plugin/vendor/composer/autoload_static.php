<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita64d302d796a7c3740109b0011db289e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Event_Plugin\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Event_Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita64d302d796a7c3740109b0011db289e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita64d302d796a7c3740109b0011db289e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita64d302d796a7c3740109b0011db289e::$classMap;

        }, null, ClassLoader::class);
    }
}