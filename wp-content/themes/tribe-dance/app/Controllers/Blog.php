<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Blog extends Controller
{


    public function BLOGqueryBlogPosts() {
        $args = [
            // 'post_type' => 'posts',
            'posts_per_page' => 10,
        ];

        $query = new \Wp_Query($args);
        return $query;
    }


}
