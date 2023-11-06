<?php

namespace app\controllers;

class SiteController
{


    public function home()
    {

        $params = [
            'name'=>"Julius"
        ];
        return Application::$app->router->renderView('contact',$params);
    }


    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    
    public function handleContact()
    {
        return 'Handling submitted data';
    }
}