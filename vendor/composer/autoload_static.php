<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb330d2d6ad203ad7276374adf1cc32f5
{
    public static $classMap = array (
        'SimpleMail' => __DIR__ . '/..' . '/eoghanobrien/php-simple-mail/class.simple_mail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb330d2d6ad203ad7276374adf1cc32f5::$classMap;

        }, null, ClassLoader::class);
    }
}
