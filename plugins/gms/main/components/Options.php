<?php namespace Gms\Main\Components;

use Cms\Classes\ComponentBase;
use Gms\Main\Models\Option;

class Options extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Настройки сайта',
            'description' => 'Добавляется 1 раз в шаблон'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['options'] = Option::orderBy('id', 'desc')->get()->first();
    }
}
