<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 14:41
 */

namespace common\models;

use Yii;
use yii\base\Model;

class CallBackForm extends Model
{
    public $phone;
    public $name;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required', 'message' => 'Заполните номер телефона'],
            [['phone', 'name'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'phone' => Yii::t('app', 'Номер телефона'),
            'name' => Yii::t('app', 'Имя'),
        ];
    }
}
