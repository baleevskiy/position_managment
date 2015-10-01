<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Position */
/* @var $form yii\widgets\ActiveForm */
?>

<?php

use app\models\PositionType;
?>



<div class="position-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->input('text') ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(
        ArrayHelper::map(
            PositionType::find()->all(),
            'id',
            'name'
        )
        );?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
