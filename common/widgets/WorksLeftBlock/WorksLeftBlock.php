<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 18:23
 */

namespace common\widgets\WorksLeftBlock;

use Yii;
use yii\base\Widget;

class WorksLeftBlock extends Widget
{

    public function init() {
        parent::init();
    }

    public function run()
    {
        return $this->render(
            'view',
            [
                'widget' => $this,
            ]);
    }

}
