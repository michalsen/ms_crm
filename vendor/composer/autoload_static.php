<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb52be7e0f6211681acac5a67849195ea
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'AlexaCRM\\CRMToolkit\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'AlexaCRM\\CRMToolkit\\' => 
        array (
            0 => __DIR__ . '/..' . '/alexacrm/php-crm-toolkit/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb52be7e0f6211681acac5a67849195ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb52be7e0f6211681acac5a67849195ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
