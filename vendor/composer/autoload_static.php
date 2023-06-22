<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ff573b131505ae13e8ae8239065e051
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monocubed\\Calc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monocubed\\Calc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/monocubed/calc/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ff573b131505ae13e8ae8239065e051::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ff573b131505ae13e8ae8239065e051::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ff573b131505ae13e8ae8239065e051::$classMap;

        }, null, ClassLoader::class);
    }
}