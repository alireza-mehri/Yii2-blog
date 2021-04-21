<div class="card" style="width: 18rem;">

    <div class="card-body">
        <a href="<?=\yii\helpers\Url::to(['post/view', 'id' => $model->id]) ?>" class="card-link">
            <h2 class="card-title"><?= $model->title; ?></h2></a>
        <h6 class="card-subtitle mb-2 text-muted">category: <?= $model->category; ?></h6>
        <p class="card-text">
            <?= $model->content; ?>
        </p>

    </div>
</div>

<hr>