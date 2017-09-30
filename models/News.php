<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $news_id
 * @property string $news_name
 * @property string $news_text
 * @property string $news_create_data
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['news_text'], 'string'],
            [['news_create_data'], 'safe'],
            [['news_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'news_name' => 'News Name',
            'news_text' => 'News Text',
            'news_create_data' => 'News Create Data',
        ];
    }
}
