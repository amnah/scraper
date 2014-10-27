<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $value
 */
class Config extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['name', 'value'], 'string', 'max' => 255],
            [['name'], 'unique']
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
            'value' => Yii::t('app', 'Value'),
        ];
    }

    /**
     * Get Config item by name
     *
     * @param string $name
     * @return mixed
     */
    public static function get($name)
    {
        $model = static::findOne(['name' => $name]);
        return $model->value;
    }

    /**
     * Set Config item by name
     *
     * @param string $name
     * @param string $value
     * @return bool
     */
    public static function set($name, $value)
    {
        $model = static::findOne(['name' => $name]);
        $model->value = $value;
        return $model->save();
    }
}
