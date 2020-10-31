<?php namespace Gms\Reviews;

use Backend;
use System\Classes\PluginBase;

/**
 * reviews Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Отзывы',
            'description' => 'Разные выводы отзывов на сайт',
            'author'      => 'gms',
            'icon'        => 'icon-comments'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        //return []; // Remove this line to activate

        return [
            'Gms\Reviews\Components\Reviews' => 'review',
            'Gms\Reviews\Components\Reviewone' => 'reviewone',
            'Gms\Reviews\Components\Reviewall' => 'reviewall',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gms.reviews.some_permission' => [
                'tab' => 'reviews',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'reviews' => [
                'label'       => 'Отзывы',
                'url'         => Backend::url('gms/reviews/reviews'),
                'icon'        => 'icon-comments',
                'permissions' => ['gms.reviews.*'],
                'order'       => 500,
            ]
        ];
    }
}
