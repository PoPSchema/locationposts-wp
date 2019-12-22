<?php
namespace PoP\LocationPostsWP\TypeAPIs;

use WP_Post;
use function get_post;
use PoP\PostsWP\TypeAPIs\PostTypeAPI;
use PoP\LocationPosts\TypeAPIs\LocationPostTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class LocationPostTypeAPI extends PostTypeAPI implements LocationPostTypeAPIInterface
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

    /**
     * Get the locationPost with provided ID or, if it doesn't exist, null
     *
     * @param [type] $id
     * @return void
     */
    public function getLocationPost($id)
    {
        $post = get_post($id);
        if (!$post || $post->post_type != \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST) {
            return null;
        }
        return $post;
    }

    /**
     * Indicate if an locationPost with provided ID exists
     *
     * @param [type] $id
     * @return void
     */
    public function locationPostExists($id): bool
    {
        return $this->getLocationPost($id) != null;
    }

    public function getLocationPosts($query, array $options = [])
    {
        return $this->getPosts($query, $options);
    }
    protected function convertPostsQuery($query, array $options = [])
    {
        $query = parent::convertPostsQuery($query, $options);
        $query['post_type'] = array(\POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST);
        return $query;
    }
}
