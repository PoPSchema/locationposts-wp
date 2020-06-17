<?php

declare(strict_types=1);

namespace PoP\LocationPostsWP\TypeResolverPickers\Overrides;

use PoP\CustomPostsWP\TypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoP\CustomPostsWP\TypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;

class LocationPostCustomPostTypeResolverPicker extends \PoP\LocationPosts\TypeResolverPickers\Optional\LocationPostCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getCustomPostType(): string
    {
        return \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST;
    }
}
