<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property string $Name
 * @property string $email
 * @property string $password
 * @property string $rpassword
 * @property string $role
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'email',  'role'], 'required'],
            [['Name', 'email',  'role'], 'string', 'max' => 30],
           
        ];
    }

   

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'email' => 'Email',
            // 'password' => 'Password',
            // 'rpassword' => 'Rpassword',
            'role' => 'Role',
        ];
    }
}