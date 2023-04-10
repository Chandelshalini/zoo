<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zoo".
 *
 * @property int $id
 * @property string $name
 * @property string $location
 */
class Zoo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zoo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'location'], 'required'],
            [['name', 'location'], 'string', 'max' => 30],
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
            'location' => 'Location',
        ];
    }
}