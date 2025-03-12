<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PostList extends Composer
{
   
    protected static $views = [
        'blocks.post-list',
    ];

    public function with()
    {
        return [
            'posts' => $this->getMostReadPosts(),
        ];
    }

    protected function getMostReadPosts()
    {
        $query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        return $query->posts;
    }
}
