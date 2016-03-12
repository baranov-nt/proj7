<?php
/**
 * Created by phpNT.
 * User: phpNT
 * Date: 12.03.2016
 * Time: 14:32
 */

namespace common\widgets\CallBack;

use Yii;
use yii\base\Widget;
use common\models\CallBackForm;

class CallBack extends Widget
{

    public function init() {
        parent::init();
    }

    public function run()
    {
        $modelCallBackForm = new CallBackForm();

        return $this->render(
            'view',
            [
                'widget' => $this,
                'modelCallBackForm' => $modelCallBackForm
            ]);
    }

}
