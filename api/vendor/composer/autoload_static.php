<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9805abee06c893524a984bae4fe95889
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Prakash\\Api\\' => 12,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Prakash\\Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9805abee06c893524a984bae4fe95889::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9805abee06c893524a984bae4fe95889::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9805abee06c893524a984bae4fe95889::$classMap;

        }, null, ClassLoader::class);
    }
}
