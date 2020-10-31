<?php namespace Gms\Reviews\Components;

use Cms\Classes\ComponentBase;
use Gms\Reviews\Models\Review;

class Reviewone extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Один отзыв',
            'description' => 'Выводит только 1 отзыв по параметру slug  '
        ];
    }

    public function defineProperties()
    {
        return [
        'slug' => [
                'title'       => 'Slug',
                'description' => 'Введите переменную',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
        ];
    }

    public function onRun()
    {
        $slug = $this->property('slug');

        $review_one = Review::where('slug', $slug)->first();
        if (!$review_one) {
            $this->controller->setStatusCode(404);
            return $this->controller->run('404');
        } $this->page['review'] = $review_one;
    }
}
