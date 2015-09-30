<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "positions".
 *
 * @property integer $id
 * @property string $description
 * @property integer $type_id
 *
 * @property PositionType $type
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'positions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['type_id'], 'required'],
            [['type_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'type_id' => 'Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(PositionType::className(), ['id' => 'type_id']);
    }
}
