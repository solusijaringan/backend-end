<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ads */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ads-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'judul_ads')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'status')->radioList([
        0 => 'Draft',
        1 => 'Tampil',
        2 => 'Hapus'
    ])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
