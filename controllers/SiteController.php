<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use yii\helpers\Url;

class SiteController extends Controller
{
    public function actionHome()
    {
       
        return $this->render('homepage/home');
    }

    public function actionExplore()
    {
        return $this->render('explorepage/explore');
    }
    
    public function actionAnnouncement()
    {
        return $this->render('announcementpage/announcement');
    }
}

