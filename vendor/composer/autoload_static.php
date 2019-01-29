<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2613b2012ca2a6ab5ad0c4338855ea81
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2613b2012ca2a6ab5ad0c4338855ea81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2613b2012ca2a6ab5ad0c4338855ea81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
