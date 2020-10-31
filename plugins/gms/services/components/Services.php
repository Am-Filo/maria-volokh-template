<?php namespace Gms\Services\Components;

use Cms\Classes\ComponentBase;
use Gms\Services\Models\Service;

class Services extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Услуги',
            'description' => 'Вывод услуг'
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
        'maxItems' => [
                'title'       => 'Введите количество выводимых услуг',
                'description' => 'Введите 0 чтоб выводить все',
                'type'        => 'string',
                'default'     => 10,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Максимальное количество услуг могут быть только числовым параматром'
            ]

        ];
    }

    public function getService()
    {
        $slug = $this->property('slug');
        $service_one = Service::where('slug', $slug)->first();
        if (!$service_one) {
            $this->controller->setStatusCode(404);
            return $this->controller->run('404');
        } return $this->page['service'] = $service_one;
    }

    public function getServicesView()
    {
        if($this->property('maxItems') == 0) return Service::orderBy('id', 'desc')->get();
        else return Service::orderBy('id', 'desc')->take($this->property('maxItems'))->get();
    }
}
