<?php namespace Gms\Services\Components;

use Cms\Classes\ComponentBase;
use Gms\Services\Models\Stage;

class Stages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Этапы подготовки',
            'description' => 'Компонент этапов подготовки к операции'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function viewStage_1()
    {
        return Stage::whereBetween('id', [1, 3])->get();
    }

    public function viewStage_2()
    {
        return Stage::whereBetween('id', [4, 6])->get();
    }

    public function viewStage_3()
    {
        return Stage::whereBetween('id', [7, 9])->get();
    }
}
