<?php


namespace Mouf\Javascript\Underscore;

use Mouf\Html\Utils\WebLibraryManager\WebLibrary;
use Psr\Container\ContainerInterface;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\Annotations\Tag;
use TheCodingMachine\Funky\ServiceProvider;

class UnderscoreServiceProvider extends ServiceProvider
{
    /**
     * @Factory(name="jQueryFileTreeWebLibrary", tags={@Tag(name="webLibraries", priority=0.0)})
     */
    public static function createWebLibrary(ContainerInterface $container): WebLibrary
    {
        return new WebLibrary(array(
            'vendor/mouf/javascript.underscore/lib/underscore.js'
        ),
            array(),
            $container->get('root_url'));
    }
}
