<?php

namespace app\models;

use yii\base\Model;

class PostForm extends Model
{
    public $title;
    public $content;
    public $category;

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