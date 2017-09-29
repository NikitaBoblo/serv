<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $product_name
 * @property string $product_descr
 * @property string $product_created_at
 * @property string $product_updated_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'product_descr'], 'required'],
            [['product_descr'], 'string'],
            [['product_created_at', 'product_updated_at'], 'safe'],
            [['product_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'product_descr' => 'Product Descr',
            'product_created_at' => 'Product Created At',
            'product_updated_at' => 'Product Updated At',
        ];
    }
}
