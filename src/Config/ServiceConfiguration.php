<?php

declare(strict_types=1);

namespace PoP\LocationPostsWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\LocationPosts\TypeResolverPickers\Optional\LocationPostCustomPostTypeResolverPicker::class,
            \PoP\LocationPostsWP\TypeResolverPickers\Overrides\LocationPostCustomPostTypeResolverPicker::class
        );
    }
}
