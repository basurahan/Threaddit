<?php

namespace App\Constants;

class DrawerItems
{
    public const items = array(
        'home' => array(
            'icon' => 'home',
            'label' => 'Home',
            'page' => 'pages.home'
        ),
        'popular' => array(
            'icon' => 'star-off',
            'label' => 'Popular',
            'page' => 'pages.home'
        ),
        'all' => array(
            'icon' => 'like-o',
            'label' => 'All',
            'page' => 'pages.home'
        )
    );

    public static function getSectionPage(string $section)
    {
        return self::items[$section]['page'];
    }

    public static function paths()
    {
        $paths = [];
        foreach (self::items as $key => $val)
        {
            array_push($paths, $key);
        }
        return $paths;
    }
}