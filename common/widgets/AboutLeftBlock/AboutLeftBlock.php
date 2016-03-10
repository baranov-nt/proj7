<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 10.03.2016
 * Time: 21:12
 */
namespace common\widgets\AboutLeftBlock;

use Yii;
use yii\base\Widget;

class AboutLeftBlock extends Widget
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
