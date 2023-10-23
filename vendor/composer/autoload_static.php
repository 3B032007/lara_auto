<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27b180f006d03037feec63955bf22f41
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Demo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Demo',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27b180f006d03037feec63955bf22f41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27b180f006d03037feec63955bf22f41::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27b180f006d03037feec63955bf22f41::$classMap;

        }, null, ClassLoader::class);
    }
}
