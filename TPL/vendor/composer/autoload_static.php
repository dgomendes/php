<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b1aa5c35930085fbf1210b374b264de
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b1aa5c35930085fbf1210b374b264de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b1aa5c35930085fbf1210b374b264de::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0b1aa5c35930085fbf1210b374b264de::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
