<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdff0e40fd466efb649bc41c239598229
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'megastruktur\\' => 13,
        ),
        'N' => 
        array (
            'Ngenius\\NgeniusCommon\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'megastruktur\\' => 
        array (
            0 => __DIR__ . '/..' . '/megastruktur/phone-country-codes/src',
        ),
        'Ngenius\\NgeniusCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/ngenius/ngenius-common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdff0e40fd466efb649bc41c239598229::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdff0e40fd466efb649bc41c239598229::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdff0e40fd466efb649bc41c239598229::$classMap;

        }, null, ClassLoader::class);
    }
}
