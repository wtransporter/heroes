<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa8d0b1be0ca270b0f307876c1263509
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa8d0b1be0ca270b0f307876c1263509::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa8d0b1be0ca270b0f307876c1263509::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa8d0b1be0ca270b0f307876c1263509::$classMap;

        }, null, ClassLoader::class);
    }
}
