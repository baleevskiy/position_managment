<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accountabilities".
 *
 * @property integer $id
 * @property string $name
 *
 * @property PositionTypeAccountability[] $positionTypeAccountabilities
 */
class Accountability extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accountabilities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'required'],
            [['name'], 'string', 'max' => 128],
            [['description'], 'string']
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
            'description' => 'Description'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPositionTypeAccountabilities()
    {
        return $this->hasMany(PositionTypeAccountability::className(), ['accountability_id' => 'id']);
    }
}
