<?php

namespace app\models;

use voskobovich\behaviors\ManyToManyBehavior;
use Yii;

/**
 * This is the model class for table "position_types".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Employee[] $employees
 * @property PositionTypeAccountability[] $positionTypeAccountabilities
 * @property Position[] $positions
 */
class PositionType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position_types';
    }

    public function behaviors()
    {
        return [
            [
                'class' => ManyToManyBehavior::className(),
                'relations' => [
                    'accountability_list' => 'accountabilities',
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 64],
            [['accountability_list'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['position_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositionTypeAccountabilities()
    {
        return $this->hasMany(PositionTypeAccountability::className(), ['position_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountabilities()
    {
        return $this->hasMany(Accountability::className(), ['id' => 'accountability_id'])
            ->viaTable(PositionTypeAccountability::tableName(), ['position_type_id' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositions()
    {
        return $this->hasMany(Position::className(), ['type_id' => 'id']);
    }

}
