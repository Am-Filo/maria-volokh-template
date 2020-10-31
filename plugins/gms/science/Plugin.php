<?php namespace Gms\Science;

use Backend;
use System\Classes\PluginBase;

/**
 * science Plugin Information File
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
            'name'        => 'Научная деятельность',
            'description' => 'Научная деятельность',
            'author'      => 'gms',
            'icon'        => 'icon-filter'
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
            'Gms\Science\Components\Sciencealls' => 'sciencealls',
            'Gms\Science\Components\Sciences' => 'sciences',
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
            'gms.science.some_permission' => [
                'tab' => 'science',
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
            'science' => [
                'label'       => 'Научная деятельность',
                'url'         => Backend::url('gms/science/sciences'),
                'icon'        => 'icon-filter',
                'permissions' => ['gms.science.*'],
                'order'       => 500,
            ],
        ];
    }
}
