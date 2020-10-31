<?php namespace Gms\Order;

use Backend;
use System\Classes\PluginBase;

/**
 * order Plugin Information File
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
            'name'        => 'Заявки',
            'description' => 'Заявки пришедшие из фронтенда',
            'author'      => 'gms',
            'icon'        => 'icon-file-text'
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
            'Gms\Order\Components\Feedbacks' => 'feedbacks',
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
            'gms.order.some_permission' => [
                'tab' => 'order',
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
            'order' => [
                'label'       => 'Заявки',
                'url'         => Backend::url('gms/order/feedbacks'),
                'icon'        => 'icon-file-text',
                'permissions' => ['gms.order.*'],
                'order'       => 500,
            ],
        ];
    }
}
