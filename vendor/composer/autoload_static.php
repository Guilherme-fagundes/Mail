<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit122a7763fff0840bf09ec7a31f1eb9b4
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'coffeebreaks\\' => 13,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'coffeebreaks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/coffeebreaks',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit122a7763fff0840bf09ec7a31f1eb9b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit122a7763fff0840bf09ec7a31f1eb9b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
