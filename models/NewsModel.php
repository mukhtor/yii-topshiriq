<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\helpers\StringHelper;
use yii\imagine\Image;
use yii\imagine\BaseImage;
use Imagine\Image\Box;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $article
 * @property int $views_count
 * @property string $create_date
 * @property string $update_date
 * @property string $thumb_img
 */
class NewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'name', 'article', 'thumb_img'], 'required'],
            [['article'], 'string'],
            ['views_count', 'integer'],
            [['views_count'], 'default', 'value' => 0],
            [['create_date', 'update_date'], 'safe'],
            [['create_date', 'update_date'], 'default', 'value'=> new Expression('NOW()')],
            [['image', 'name', 'thumb_img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'article' => 'Article',
            'image' => 'Image',
            'views_count' => 'Views Count',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'thumb_img' => 'Thumb Img',
            'description' => 'Qisqa matn',
        ];
    }

    /**
     * Get Formatted create date
     * @return string
     */
    public function getFormatCreateDate()
    {
        $result = date_format(date_create($this->create_date), 'd/m/Y');
        return $result;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        $text = StringHelper::truncateWords($this->article, 50);
        return $text;
    }

    public function getImages()
    {
        $img=Image::frame('uploads/5ccc6de3f1798.jpg',15, '555', 0)
            ->rotate(-18)
            ->save('uploads/image.jpg', ['jpeg_quality' => 50]);
        return "image.jpg";
    }
}
