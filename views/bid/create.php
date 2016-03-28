<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bid */

$this->title = Yii::t('app', 'Create Bid');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bids'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
