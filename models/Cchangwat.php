<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cchangwat".
 *
 * @property string $code
 * @property string $name
 * @property string $zonecode
 */
class Cchangwat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cchangwat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code', 'zonecode'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'รหัสจังหวัด',
            'name' => 'จังหวัด',
            'zonecode' => 'เขต',
        ];
    }
}
