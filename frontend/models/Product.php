<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title
 * @property string|null $category
 * @property string|null $description
 * @property int|null $quantity
 * @property float $price
 * @property string $madeIn
 * @property int|null $SKU
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'price', 'madeIn'], 'required'],
            [['description'], 'string'],
            [['quantity', 'SKU'], 'integer'],
            [['price'], 'number'],
            [['title', 'category', 'madeIn'], 'string', 'max' => 255],
            [['SKU'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category' => 'Category',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'price' => 'Price',
            'madeIn' => 'Made In',
            'SKU' => 'Sku',
        ];
    }
}
