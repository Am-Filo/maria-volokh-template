<?php namespace Gms\Services\Components;

use Cms\Classes\ComponentBase;
use Gms\Services\Models\Team;

class Teams extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Команда специалистов',
            'description' => 'Команда специалистов'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getTeam()
    {
        return Team::orderBy('id', 'desc')->get();
    }
}
