<?php

namespace app\modules\image\models;

use Yii;

/**
 * This is the model class for table "new_image".
 *
 * @property int $id
 * @property int $items_id
 * @property string $nodeType
 * @property string $fileName
 * @property string|null $alt
 * @property string|null $title
 * @property int $action
 * @property int $position
 */
class NewImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['items_id', 'nodeType', 'fileName'], 'required'],
            [['items_id', 'action', 'position'], 'integer'],
            [['nodeType'], 'integer', 'max' => 20],
            [['fileName', 'alt', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'items_id' => 'Node ID',
            'nodeType' => 'Node Type',
            'fileName' => 'File Name',
            'alt' => 'Alt',
            'title' => 'Title',
            'action' => 'Action',
            'position' => 'Position',
        ];
    }
}
