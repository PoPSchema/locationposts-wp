<?php
namespace PoP\LocationPostsWP\TypeAPIs;

use WP_Post;
use PoP\LocationPosts\TypeAPIs\LocationPostTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class LocationPostTypeAPI implements LocationPostTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type LocationPost
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfLocationPostType($object): bool
    {
        return ($object instanceof WP_Post) && $object->post_type == \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST;
    }
}
