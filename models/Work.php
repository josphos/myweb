<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property integer $kpi
 * @property string $prov
 * @property integer $target
 * @property integer $result
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kpi', 'prov'], 'required'],
            [['kpi', 'target', 'result'], 'integer'],
            [['prov'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kpi' => 'ตัวชี้วัด',
            'prov' => 'จังหวัด',
            'target' => 'เป้าหมาย',
            'result' => 'ผลงาน',
        ];
    }
}
