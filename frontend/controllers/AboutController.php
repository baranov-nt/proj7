<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 17:03
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AboutController extends Controller
{
    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionCompany()
    {
        return $this->render('company');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionCommand()
    {
        return $this->render('command');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPartners()
    {
        return $this->render('partners');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionMerits()
    {
        return $this->render('merits');
    }
}