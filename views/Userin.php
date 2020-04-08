<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userin */
/* @var $form ActiveForm */
?>
<div class="Userin">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_kota') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'level') ?>
        <?= $form->field($model, 'create_by') ?>
        <?= $form->field($model, 'update_by') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Userin -->
