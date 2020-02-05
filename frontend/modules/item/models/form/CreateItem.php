<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 05.02.2020
 * Time: 9:19
 */
namespace app\modules\item\models;

use yii\base\Model;

class CreateItem extends Model
{

            public function rules()
            {
                return [
                    ['name', 'filter', 'filter' => 'trim'],
                    ['name', 'required'],
                    ['name', 'string', 'max' => 255],
                ];
            }

            public function attributeLabels()
            {
                return [
                    'name' => 'Имя',
                ];
            }

}