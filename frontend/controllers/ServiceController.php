<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 17:19
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ServiceController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSiteDevelopment()
    {
        return $this->render('site-development');
    }

    public function actionLandingPage()
    {
        return $this->render('landing-page');
    }

    public function actionSearchOptimization()
    {
        return $this->render('search-optimization');
    }

    public function actionMediaOptimization()
    {
        return $this->render('media-optimization');
    }

    public function actionSiteAudit()
    {
        return $this->render('site-audit');
    }

    public function actionEmailMarketing()
    {
        return $this->render('email-marketing');
    }

    public function actionOneClickMarketing()
    {
        return $this->render('one-click-marketing');
    }

    public function actionCallBack()
    {
        return $this->render('call-back');
    }
}