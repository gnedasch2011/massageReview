<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 25.11.2019
 * Time: 8:43
 */

namespace common\widgets\admin;


use common\helpers\CommonHelpers;

class AddInputWidget extends \yii\base\Widget
{
    public $model;
    public $attr;
    public $placeholder;

    public function init()
    {
        parent::init();
    }

    public function run()
    {

        $nameAttr = CommonHelpers::getNameCurrentClass($this->model) . "[][" . $this->attr . "]";

        return $this->render(CommonHelpers::getNameCurrentClass($this), [
            'model' => $this->model,
            'attr' => $this->attr,
            'nameAttr' => $nameAttr,
            'placeholder' => $this->placeholder,
        ]);
    }
}