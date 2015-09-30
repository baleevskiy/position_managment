<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PositionType */

$this->title = 'Create Position Type';
$this->params['breadcrumbs'][] = ['label' => 'Position Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
