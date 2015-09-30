<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Accountability */

$this->title = 'Create Accountability';
$this->params['breadcrumbs'][] = ['label' => 'Accountabilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accountability-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
