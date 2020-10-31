<?php namespace Gms\Reviews\Components;

use Cms\Classes\ComponentBase;
use Gms\Reviews\Models\Review;

class Reviewall extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Отзывы - все',
            'description' => 'Выводит все отзывы'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function ViewReviewsAll()
    {
        return Review::orderBy('id', 'desc')->get();
    }
}
