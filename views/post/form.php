<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\PostForm */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h1>create new post</h1>
<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'category')->dropdownList([
            'item 1' => 'item 1',
            'item 2' => 'item 2'
        ],
            ['prompt'=>'Select Category']) ?>
        <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>