<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a08db82a9a336a48fb50cb2be96e496
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Library_Post_Types\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Library_Post_Types\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a08db82a9a336a48fb50cb2be96e496::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a08db82a9a336a48fb50cb2be96e496::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a08db82a9a336a48fb50cb2be96e496::$classMap;

        }, null, ClassLoader::class);
    }
}