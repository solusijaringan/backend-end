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

            'id',
            'judul_ads',
            [
                'attribute' => 'Photo',
                'filter' => false,
                'format' => 'html', //raw, html, text
                'content' => function($data) {
                    if(!empty($data->photo))
                        return Html::img(\Yii::$app->request->baseUrl . \Yii::$app->params['pathAds'] . $data->photo, ['alt'=>$data->judul_ads, 'width'=>150]);
                    return '<span class="text-danger"><strong>Tidak ada image</strong></span>';
                }
            ],
            'posisi',
            [
                'attribute' => 'status',
                'filter' => [0=>'Tidak tampil', 1=>'Tampil', 2=>'Hapus'],
                'content' => function ($data) {
                    $label = 'Tidak Tampil';
                    if($data->status == 1)
                        $label = 'Tampil';
                    elseif($data->status == 2)
                        $label = 'Hapus';
                    return $label;
                }
            ],
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
