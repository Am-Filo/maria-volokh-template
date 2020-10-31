<?php namespace Gms\Main\Components;

use Cms\Classes\ComponentBase;
use Gms\Main\Models\Slider;

class Sliders extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Слайдер',
            'description' => 'Слайдер на главную страницу'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['sliders'] = Slider::orderBy('id', 'desc')->get();
    }
}
