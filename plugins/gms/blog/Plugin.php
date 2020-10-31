<?php namespace Gms\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * blog Plugin Information File
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
            'name'        => 'Блог',
            'description' => 'Статьи',
            'author'      => 'gms',
            'icon'        => 'icon-book'
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
            'Gms\Blog\Components\Articles' => 'article',
            'Gms\Blog\Components\Articleall' => 'articleall',
            'Gms\Blog\Components\Articlepreview' => 'articlepreview',
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
            'gms.blog.some_permission' => [
                'tab' => 'blog',
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
            'blog' => [
                'label'       => 'Блог',
                'url'         => Backend::url('gms/blog/articles'),
                'icon'        => 'icon-book',
                'permissions' => ['gms.blog.*'],
                'order'       => 500,
            ],
        ];
    }
}
