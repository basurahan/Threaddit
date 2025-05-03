<?php

namespace App\Constants;

class DrawerItems
{
    public const items = array(
        array(
            'icon' => 'home',
            'label' => 'Home',
            'path' => 'home',
            'page' => 'pages.home'
        ),
        array(
            'icon' => 'star-off',
            'label' => 'Popular',
            'path' => 'popular',
            'page' => 'pages.home'
        ),
        array(
            'icon' => 'like-o',
            'label' => 'All',
            'path' => 'all',
            'page' => 'pages.home'
        )
    );

    public static function paths()
    {
        return array_map(
            function($item) {
                return $item['path'];
            },
            self::items
        );
    }
}