<?php

declare(strict_types=1);

namespace PoP\LocationPostsWP;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\LocationPostsWP\Config\ServiceConfiguration;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\LocationPosts\Component::class,
            \PoP\PostsWP\Component::class,
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize()
    {
        parent::doInitialize();
        self::initYAMLServices(dirname(__DIR__));
        ServiceConfiguration::init();
    }
}
