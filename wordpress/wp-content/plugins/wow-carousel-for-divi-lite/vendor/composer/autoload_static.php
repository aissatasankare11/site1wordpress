<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitede43676cbe5a7f99a2b76a8554704ca
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitede43676cbe5a7f99a2b76a8554704ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitede43676cbe5a7f99a2b76a8554704ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitede43676cbe5a7f99a2b76a8554704ca::$classMap;

        }, null, ClassLoader::class);
    }
}
