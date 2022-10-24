<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1d3335e4140b99ca1b8c04a6e33996c
{
    public static $files = array (
        '9cf4c595c37e07a0b02e5141e2071357' => __DIR__ . '/../..' . '/Engine/helpers/dump.php',
    );

    public static $prefixLengthsPsr4 = array (

        'E' => 
        array (
            'Engine\\' => 7,
        ),


        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (

        'Engine\\',

        'Application\\' ,

        array (
            0 => __DIR__ . '/../..' . '/Engine',
        ),

        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),

    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1d3335e4140b99ca1b8c04a6e33996c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1d3335e4140b99ca1b8c04a6e33996c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1d3335e4140b99ca1b8c04a6e33996c::$classMap;

        }, null, ClassLoader::class);
    }
}
