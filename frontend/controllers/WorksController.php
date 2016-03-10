<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 18:18
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class WorksController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionClients()
    {
        return $this->render('clients');
    }

    public function actionOurLandingPage()
    {
        return $this->render('our-landing-page');
    }

    public function actionSites()
    {
        return $this->render('sites');
    }

    public function actionVideoRecommendations()
    {
        return $this->render('video-recommendations');
    }

    public function actionSeoPromotion()
    {
        return $this->render('seo-promotion');
    }
}