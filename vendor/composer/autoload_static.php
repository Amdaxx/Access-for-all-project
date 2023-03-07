<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit454d9cb08cec901fa0f98430be89103f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit454d9cb08cec901fa0f98430be89103f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit454d9cb08cec901fa0f98430be89103f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit454d9cb08cec901fa0f98430be89103f::$classMap;

        }, null, ClassLoader::class);
    }
}
