<?php

use app\models\Accountability;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PositionType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="position-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    $list = ArrayHelper::map(Accountability::find()->all(), 'id', 'name');
    $checked = ArrayHelper::getColumn($model->accountabilities, 'id');
    echo Html::checkboxList('PositionType[accountability_list]', $checked, $list);

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
