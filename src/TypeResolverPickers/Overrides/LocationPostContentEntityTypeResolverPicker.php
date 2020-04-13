<?php

declare(strict_types=1);

namespace PoP\LocationPostsWP\TypeResolverPickers\Overrides;

use PoP\PostsWP\TypeResolverPickers\ContentEntityTypeResolverPickerInterface;
use PoP\PostsWP\TypeResolverPickers\NoCastContentEntityTypeResolverPickerTrait;

class LocationPostContentEntityTypeResolverPicker extends \PoP\LocationPosts\TypeResolverPickers\Optional\LocationPostContentEntityTypeResolverPicker implements ContentEntityTypeResolverPickerInterface
{
    use NoCastContentEntityTypeResolverPickerTrait;

    public function getPostType(): string
    {
        return \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST;
    }
}
