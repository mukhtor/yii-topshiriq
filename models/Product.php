<?php

namespace app\models;

use Yii;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $information
 * @property int $thumb_img
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'name', 'information', 'thumb_img'], 'required'],
            [['information'], 'string'],
            [['thumb_img'], 'string','max'=>255],
            [['image'], 'string', 'max' => 200],
            [['name'], 'string', 'max' => 255],
            [['money'], 'string', 'max' => 100],
            [['view_count'], 'default', 'value' => 0],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'name' => 'Name',
            'information' => 'Information',
            'money'=>'Money',
            'thumb_img' => 'Thumb Img',
            'view_count' => 'View Count',
        ];
    }
    public function getDescription()
    {
        $text = StringHelper::truncateWords($this->information, 10);
        return $text;
    }
}
