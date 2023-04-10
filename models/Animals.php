<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "animals".
 *
 * @property int $id
 * @property string $Name
 * @property string $breed
 * @property int $cagenumber
 * @property string $gender
 * @property string $zallocated
 */
class Animals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'animals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'breed', 'cagenumber', 'gender', 'zallocated'], 'required'],
            [['cagenumber'], 'integer'],
           
            [['name', 'gender'], 'string', 'max' => 22],
            [['breed'], 'string', 'max' => 30],
            [['zallocated'], 'string', 'max' => 100],
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
            'breed' => 'Breed',
            'cagenumber' => 'Cagenumber',
            'gender' => 'Gender',
            'zallocated' => 'Zallocated',
           
        ];
    }
}