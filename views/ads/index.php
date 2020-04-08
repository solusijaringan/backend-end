<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ads', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ads',
            'judul_ads',
            'photo',
            'posisi',
            'create_by',
            //'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
