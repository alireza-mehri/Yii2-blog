<div class="card" style="width: 18rem;">


    <div class="card-body">
        <?php
        if ($model->status):?>
            <a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $model->id]) ?>" class="card-link">
                <h2 class="card-title"><?= $model->title; ?></h2></a>

            <p class="card-text">
                <?= $model->content; ?>
            </p>
        <?php endif; ?>
    </div>
</div>

<hr>