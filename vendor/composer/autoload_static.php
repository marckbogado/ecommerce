<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit521571040cdcc3ddb5d0f115ca41b99c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Hcode\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Hcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit521571040cdcc3ddb5d0f115ca41b99c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit521571040cdcc3ddb5d0f115ca41b99c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit521571040cdcc3ddb5d0f115ca41b99c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit521571040cdcc3ddb5d0f115ca41b99c::$classMap;

        }, null, ClassLoader::class);
    }
}
