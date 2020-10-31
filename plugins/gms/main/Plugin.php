<?php namespace Gms\Main;

use Backend;
use System\Classes\PluginBase;

/**
 * main Plugin Information File
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
            'name'        => 'Настройки',
            'description' => 'Основные настройки сайта',
            'author'      => 'gms',
            'icon'        => 'icon-cog'
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
            'Gms\Main\Components\Options' => 'options',
            'Gms\Main\Components\Sliders' => 'sliders',
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
            'gms.main.some_permission' => [
                'tab' => 'main',
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
            'main' => [
                'label'       => 'Настройки',
                'url'         => Backend::url('gms/main/options'),
                'icon'        => 'icon-cog',
                'permissions' => ['gms.main.*'],
                'order'       => 500,
                'sideMenu' => [
                    'main' => [
                        'label'       => 'Основные',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('gms/main/options'),
                    ],     
                    'sliders' => [
                        'label'       => 'Слайдер',
                        'icon'        => 'icon-circle-o-notch',
                        'url'         => \Backend::url('gms/main/sliders'),
                    ], 
                ],
            ],
        ];
    }
}
