<?php namespace Gms\Operations\Components;

use Cms\Classes\ComponentBase;
use Gms\Operations\Models\Operation;

class Operations extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Операции',
            'description' => 'Вывод проведенных операций'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title'       => 'Введите количество выводимых операции',
                'description' => 'Введите 0 чтоб выводить все',
                'type'        => 'string',
                'default'     => 10,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Максимальное количество операций могут быть только числовым параматром'
            ]
        ];
    }

    public function getOperation()
    {
        if($this->property('maxItems') == 0) return Operation::orderBy('id', 'desc')->get();
        else return Operation::orderBy('id', 'desc')->take($this->property('maxItems'))->get();
    }
}
