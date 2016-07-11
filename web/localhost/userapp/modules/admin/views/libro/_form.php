<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Libro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="libro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'autores')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anio')->textInput() ?>

    <?= $form->field($model, 'lugar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'editorial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resumen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idioma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'portada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'libro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
