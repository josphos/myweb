<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kpi".
 *
 * @property integer $id
 * @property string $topic
 * @property string $note
 */
class TbKpi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_kpi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic', 'note'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic' => 'ชื่อตัวชี้วัด',
            'note' => 'หมายเหตุ',
        ];
    }
}
