<?php namespace Gms\Order\Components;

use Mail;
use Redirect;
use Cms\Classes\ComponentBase;
use Gms\Order\Models\Feedback;
use Backend\Classes\Controller;

class Feedbacks extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Заявки',
            'description' => 'Добавляется 1 раз в шаблон'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onComplete()
    {
        //$name = post('name');
        //$phone = post('phone');

        Feedback::insert(
            ['name' => post('name'), 'phone' => post('phone'), 'ip' => $_SERVER['REMOTE_ADDR']]
        );

        Mail::sendTo('n.antonovich@grandms.ru', 'gms.order::mail.order_mail', [
            'name'  => post('name'),
            'phone'  => post('telephone'),
            'ip' => $_SERVER['REMOTE_ADDR']
        ]);

        //$this->page['success'] = 1;
        //return [    
                 return Redirect::to('feedback')->with($this->page['success'] = 1);
                    //'#vl-form-ord' => $this->renderPartial('sections/form')
               // ];
        
    }
}
