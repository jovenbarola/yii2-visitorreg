<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property string $regdate
 * @property string $email
 * @property string $fullname
 * @property string $address
 * @property string $company
 * @property string $country
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
            [['regdate', 'email', 'fullname', 'address', 'company', 'country'], 'required'],
            [['regdate'], 'safe'],
            [['address'], 'string'],
            [['email'], 'string', 'max' => 200],
            [['fullname', 'company', 'country'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regdate' => 'Regdate',
            'email' => 'Email',
            'fullname' => 'Fullname',
            'address' => 'Address',
            'company' => 'Company',
            'country' => 'Country',
        ];
    }
}
