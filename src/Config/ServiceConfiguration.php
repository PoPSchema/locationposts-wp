<?php

declare(strict_types=1);

namespace PoPSchema\LocationPostsWP\Config;

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
            \PoPSchema\LocationPosts\TypeResolverPickers\Optional\LocationPostCustomPostTypeResolverPicker::class,
            \PoPSchema\LocationPostsWP\TypeResolverPickers\Overrides\LocationPostCustomPostTypeResolverPicker::class
        );
    }
}
