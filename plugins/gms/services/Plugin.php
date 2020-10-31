<?php namespace Gms\Services;

use Backend;
use System\Classes\PluginBase;

/**
 * services Plugin Information File
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
            'name'        => 'Услуги',
            'description' => 'Услуги хирурга',
            'author'      => 'gms',
            'icon'        => 'icon-tasks'
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
            'Gms\Services\Components\Services' => 'services',
            'Gms\Services\Components\Stages' => 'stages',
            'Gms\Services\Components\Teams' => 'teams',
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
            'gms.services.some_permission' => [
                'tab' => 'services',
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
            'services' => [
                'label'       => 'Услуги',
                'url'         => Backend::url('gms/services/services'),
                'icon'        => 'icon-tasks',
                'permissions' => ['gms.services.*'],
                'order'       => 500,
                'sideMenu' => [
                    'services' => [
                        'label'       => 'Услуги',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('gms/services/services'),
                    ],     
                    'stages' => [
                        'label'       => 'Этапы подготовки',
                        'icon'        => 'icon-list-ol',
                        'url'         => \Backend::url('gms/services/stages'),
                    ],
                    'teams' => [
                        'label'       => 'Команда специалистов',
                        'icon'        => 'icon-user',
                        'url'         => \Backend::url('gms/services/teams'),
                    ], 
                ],
            ],
        ];
    }
}
