<?php
use yii\widgets\ListView;
/* @var $this yii\web\View */

$this->title = 'My Yii Blog';
?>

<?php

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'item_show'
]);
?>

