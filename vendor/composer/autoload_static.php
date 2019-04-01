<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit461431621bf4b47079dc85769349649d
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Sitetherapy\\SpinupWPComposerSite\\' => 33,
        ),
        'L' => 
        array (
            'LkWdwrd\\Composer\\' => 17,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Sitetherapy\\SpinupWPComposerSite\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'LkWdwrd\\Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/lkwdwrd/wp-muplugin-loader/src/lkwdwrd/Composer',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
        'E' => 
        array (
            'Env' => 
            array (
                0 => __DIR__ . '/..' . '/oscarotero/env/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit461431621bf4b47079dc85769349649d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit461431621bf4b47079dc85769349649d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit461431621bf4b47079dc85769349649d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
