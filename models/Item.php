<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $id
 * @property string $name_cn
 * @property string $name_en
 * @property string $name_jp
 * @property int $category_id
 * @property string $img_url
 * @property string $describe_cn
 * @property string $describe_en
 * @property string $describe_jp
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_cn', 'created_at', 'updated_at'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name_cn', 'name_en', 'name_jp'], 'string', 'max' => 100],
            [['img_url', 'describe_cn', 'describe_en', 'describe_jp'], 'string', 'max' => 200],
            [['name_cn'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_cn' => 'Name Cn',
            'name_en' => 'Name En',
            'name_jp' => 'Name Jp',
            'category_id' => 'Category ID',
            'img_url' => 'Img Url',
            'describe_cn' => 'Describe Cn',
            'describe_en' => 'Describe En',
            'describe_jp' => 'Describe Jp',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
