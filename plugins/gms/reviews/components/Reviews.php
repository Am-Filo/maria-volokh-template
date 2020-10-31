<?php namespace Gms\Reviews\Components;

use Cms\Classes\ComponentBase;
use Gms\Reviews\Models\Review;

class Reviews extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Отзывы - слайдер',
            'description' => 'Выводит отзывы на сайт в виде 1 слайда (не создает слайдер)'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Slug',
                'description' => 'Введите переменную для отзывов',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'maxItems' => [
                'title'       => 'Введите количество выводимых отзывов',
                'description' => 'Введите 0 чтоб выводить все',
                'type'        => 'string',
                'default'     => 10,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Максимальное количество отзывов могут быть только числовым параматром'
            ]
        ];
    }

    public function ViewReviews()
    {
        if($this->property('maxItems') == 0) return Review::orderBy('id', 'desc')->get();
        else return Review::orderBy('id', 'desc')->take($this->property('maxItems'))->get();
    }
}
