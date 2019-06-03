<?php
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 14.05.2019
 * Time: 21:09
 */

namespace app\components;
use yii\base\BootstrapInterface;

class LanguageSwitcher implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if($app->session->has('language')) {
            $app->language = $app->session->get('language');
        }
    }
}