<?php

declare(strict_types=1);

namespace PoP\LocationPostsWP\TypeResolverPickers\Overrides;

use PoP\ContentWP\TypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;

class LocationPostCustomPostTypeResolverPicker extends \PoP\LocationPosts\TypeResolverPickers\Optional\LocationPostCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getPostType(): string
    {
        return \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST;
    }
}