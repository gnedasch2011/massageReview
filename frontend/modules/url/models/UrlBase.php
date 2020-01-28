<?php
namespace app\modules\url\models;


use yii\db\ActiveRecord;

class UrlBase extends ActiveRecord
{

    const STATUS_DISABLE = 0;
    const STATUS_ENABLE = 1;


    public static function tableName()
    {
        return '{{%new_url}}';
    }


    public function rules()
    {
        return [
            ['alias', 'filter', 'filter' => 'trim'],
            ['alias', 'required'],
            ['alias', 'string', 'max' => 255],
            ['alias', 'unique', 'targetClass' => Url::className()],
            ['alias', 'match', 'pattern' => '/^[\w_\-\.\/]+$/',
                'message' => 'Неверный формат (доступны: буквы, цифры, "-", "_", ".", "/"'
            ],

//			['route', 'filter', 'filter' => 'trim'],
//			['route', 'required'],
            ['route', 'string', 'max' => 255],

            ['param', 'integer'],
            ['param', 'default', 'value' => 0],

            ['title', 'filter', 'filter' => 'trim'],
            ['title', 'string', 'max' => 255],

            ['keywords', 'filter', 'filter' => 'trim'],
            ['keywords', 'string', 'max' => 255],

            ['description', 'filter', 'filter' => 'trim'],
            ['description', 'string', 'max' => 255],

            ['isAdaptive', 'in', 'range' => [0, 1]],
            ['isAdaptive', 'default', 'value' => 0],

            ['status', 'in', 'range' => [self::STATUS_DISABLE, self::STATUS_ENABLE]],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Адрес страницы',
            'route' => 'Путь в системе',
            'param' => 'Параметр',
            'title' => 'Заголовок страницы',
            'keywords' => 'Ключевые слова',
            'description' => 'Описание страницы',
            'isAdaptive' => 'Адаптивный viewport',
            'status' => 'Статус',
            'params_for_filter' => 'Параметры для фильтра',
        ];
    }


}