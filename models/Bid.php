<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bid".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $date_create
 */
class Bid extends \yii\db\ActiveRecord
{
    const MAX_SIZE_NAME_ADDRESS = 255;
    const MAX_SIZE_PHONE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_create'], 'safe'],
            [['name', 'address', 'email'], 'string', 'max' => self::MAX_SIZE_NAME_ADDRESS],
            [['phone'], 'string', 'max' => self::MAX_SIZE_PHONE],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }
}
