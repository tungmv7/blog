<?php

namespace sim\modules\admin\models\module;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property integer $id
 * @property string $uniqueId
 * @property integer $isCoreModule
 * @property integer $status
 * @property integer $createdBy
 * @property integer $createdTime
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uniqueId', 'isCoreModule', 'status', 'createdBy', 'createdTime'], 'required'],
            [['isCoreModule', 'status', 'createdBy', 'createdTime'], 'integer'],
            [['uniqueId'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'uniqueId' => Yii::t('app', 'Unique ID'),
            'isCoreModule' => Yii::t('app', 'Is Core Module'),
            'status' => Yii::t('app', 'Status'),
            'createdBy' => Yii::t('app', 'Created By'),
            'createdTime' => Yii::t('app', 'Created Time'),
        ];
    }
}
