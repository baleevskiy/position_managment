<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position_type__accountabilities".
 *
 * @property integer $position_type_id
 * @property integer $accountability_id
 *
 * @property Accountability $accountability
 * @property PositionType $positionType
 */
class PositionTypeAccountability extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position_type__accountabilities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_type_id', 'accountability_id'], 'required'],
            [['position_type_id', 'accountability_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_type_id' => 'Position Type ID',
            'accountability_id' => 'Accountability ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountability()
    {
        return $this->hasOne(Accountability::className(), ['id' => 'accountability_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositionType()
    {
        return $this->hasOne(PositionType::className(), ['id' => 'position_type_id']);
    }
}
