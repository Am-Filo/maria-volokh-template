<?php namespace Gms\Science\Components;

use Cms\Classes\ComponentBase;
use Gms\Science\Models\Science;

class Sciences extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Научная статья',
            'description' => 'Вывод 1 научной статьи'
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

        $science_one = Science::where('slug', $slug)->first();

        if (!$science_one) {
            $this->controller->setStatusCode(404);
            return $this->controller->run('404');
        } $this->page['science'] = $science_one;
    }
}
