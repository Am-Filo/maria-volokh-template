<?php namespace Gms\Operations;

use Backend;
use System\Classes\PluginBase;

/**
 * operations Plugin Information File
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
            'name'        => 'Опреации',
            'description' => 'Проведенные операции',
            'author'      => 'gms',
            'icon'        => 'icon-eyedropper'
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
            'Gms\Operations\Components\Operations' => 'operations',
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
            'gms.operations.some_permission' => [
                'tab' => 'operations',
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
            'operations' => [
                'label'       => 'Операции',
                'url'         => Backend::url('gms/operations/operations'),
                'icon'        => 'icon-eyedropper',
                'permissions' => ['gms.operations.*'],
                'order'       => 500,
            ],
        ];
    }
}
