<?php namespace Gms\Science\Components;

use Cms\Classes\ComponentBase;
use Gms\Science\Models\Science;

class Sciencealls extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Вывод всех научных статей',
            'description' => 'Выводит все научные статьи'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function ViewSciencesAll()
    {
        return Science::orderBy('id', 'desc')->get();
    }
}
