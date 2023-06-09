<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18d300dae6a613f1a7e6594608966d64
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chongeric\\Httptool\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chongeric\\Httptool\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit18d300dae6a613f1a7e6594608966d64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18d300dae6a613f1a7e6594608966d64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18d300dae6a613f1a7e6594608966d64::$classMap;

        }, null, ClassLoader::class);
    }
}
