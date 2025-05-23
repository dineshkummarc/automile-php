<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f8623ef6bef6093b5c1c18120b525c5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automile\\Sdk\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automile\\Sdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f8623ef6bef6093b5c1c18120b525c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f8623ef6bef6093b5c1c18120b525c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f8623ef6bef6093b5c1c18120b525c5::$classMap;

        }, null, ClassLoader::class);
    }
}
