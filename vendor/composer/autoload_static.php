<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa7f5110f1d9b09bf0769471db8c4b01
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa7f5110f1d9b09bf0769471db8c4b01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa7f5110f1d9b09bf0769471db8c4b01::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa7f5110f1d9b09bf0769471db8c4b01::$classMap;

        }, null, ClassLoader::class);
    }
}
