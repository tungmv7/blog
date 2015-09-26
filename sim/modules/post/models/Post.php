<?php

namespace sim\modules\post\models;

use Yii;

/**
 * This is the model class for table "{{%post}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $body
 * @property integer $creator
 * @property string $status
 * @property string $slug
 * @property integer $publishedTime
 * @property integer $featuredImage
 * @property string $type
 * @property string $visibility
 * @property string $password
 * @property string $metaData
 * @property string $note
 * @property integer $createdBy
 * @property integer $createdTime
 * @property integer $updatedBy
 * @property integer $updatedTime
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%post}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'creator', 'status', 'slug', 'publishedTime', 'type', 'visibility', 'password', 'createdBy', 'createdTime', 'updatedBy', 'updatedTime'], 'required'],
            [['body', 'metaData', 'note'], 'string'],
            [['creator', 'publishedTime', 'featuredImage', 'createdBy', 'createdTime', 'updatedBy', 'updatedTime'], 'integer'],
            [['name', 'title', 'description', 'status', 'slug', 'type', 'visibility', 'password'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('post', 'ID'),
            'name' => Yii::t('post', 'Name'),
            'title' => Yii::t('post', 'Title'),
            'description' => Yii::t('post', 'Description'),
            'body' => Yii::t('post', 'Body'),
            'creator' => Yii::t('post', 'Creator'),
            'status' => Yii::t('post', 'Status'),
            'slug' => Yii::t('post', 'Slug'),
            'publishedTime' => Yii::t('post', 'Published Time'),
            'featuredImage' => Yii::t('post', 'Featured Image'),
            'type' => Yii::t('post', 'Type'),
            'visibility' => Yii::t('post', 'Visibility'),
            'password' => Yii::t('post', 'Password'),
            'metaData' => Yii::t('post', 'Meta Data'),
            'note' => Yii::t('post', 'Note'),
            'createdBy' => Yii::t('post', 'Created By'),
            'createdTime' => Yii::t('post', 'Created Time'),
            'updatedBy' => Yii::t('post', 'Updated By'),
            'updatedTime' => Yii::t('post', 'Updated Time'),
        ];
    }
}
