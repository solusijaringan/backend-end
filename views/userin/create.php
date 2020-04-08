<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userin */

$this->title = 'Create Userin';
$this->params['breadcrumbs'][] = ['label' => 'Userins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
