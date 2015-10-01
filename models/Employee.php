<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $position_type_id
 *
 * @property PositionType $positionType
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'position_id'], 'required'],
            [['position_id'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'position_id' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }
}
