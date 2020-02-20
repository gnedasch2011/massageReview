<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 20.02.2020
 * Time: 8:27
 */

namespace common\abstractComponents\behaviors;


use app\components\model\ActiveRecord;
use yii\base\Behavior;

class SlugBehaviors extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => 'beforeSaveOwner',
        ];
    }

    public function beforeSaveOwner()
    {

        $slug = \Transliterator::createFromRules(
            ':: Any-Latin;'
            . ':: NFD;'
            . ':: [:Nonspacing Mark:] Remove;'
            . ':: NFC;'
            . ':: [:Punctuation:] Remove;'
            . ':: Lower();'
            . '[:Separator:] > \'-\''
        )
            ->transliterate( $this->owner->name );
        
        $this->owner->slug = $slug;

        return $this->owner;
    }
}