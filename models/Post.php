<?php
namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord{
    public function rules()
    {
        return [
            // username and password are both required
            [['title', 'content'], 'required'],
            // rememberMe must be a boolean value
            ['category', 'required'],
        ];
    }
}
?>