<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9b682354412b4f70950fe86cb7849c4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHP\\Observer\\OnlineMarketplaceProject\\WithPattern\\' => 50,
        ),
        'D' => 
        array (
            'Dell\\DesignPatterns\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHP\\Observer\\OnlineMarketplaceProject\\WithPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/PHP/Observer/OnlineMarketplaceProject/WithPattern',
        ),
        'Dell\\DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9b682354412b4f70950fe86cb7849c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9b682354412b4f70950fe86cb7849c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9b682354412b4f70950fe86cb7849c4::$classMap;

        }, null, ClassLoader::class);
    }
}
