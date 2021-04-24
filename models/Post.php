<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $category
 * @property int|null $status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title', 'category'], 'string', 'max' => 45],
            [['content'], 'string', 'max' => 400],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
            'category' => Yii::t('app', 'Category'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public function getAllCategories()
    {
        $all = \app\models\Categories::find()->all();
        return \yii\helpers\ArrayHelper::map($all, 'id', 'name');
    }

    public function getSelectedCategory()
    {
        $selected = [];
        if ($this->isNewRecord != 1) {
            $selected = \yii\helpers\ArrayHelper::getColumn(\app\models\PostCategory::findAll(['post_id' => $this->id]),
                function ($element) {
                    return $element['category_id'];
                }
            );
        }
        return $selected;
    }

    public function afterSave($insert, $changedAttributes)
    {
        $selected = Yii::$app->request->post('PostCategories');
        \app\models\PostCategory::deleteAll(['post_id' => $this->id]);
        $insert_data = [];
        foreach ($selected as $v) {
            $insert_data[] = [$this->id, $v];
        }
        Yii::$app->db->createCommand()->batchInsert('post_category', ['post_id', 'category_id'], $insert_data)->execute();
    }
}
