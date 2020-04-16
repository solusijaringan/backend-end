<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ads */

$this->title = $model->judul_ads;
$this->params['breadcrumbs'][] = ['label' => 'Ads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ads-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul_ads',
            [
                'attribute' => 'photo',
                'format' => 'html', //raw, html,
                'value' => function($model) {
                    if(empty($model->photo))
                        return '<span class="text-danger"><strong>Tidak ada image</strong></span>';

                    return Html::img(\Yii::$app->request->baseUrl . '/public/images/ads/' . $model->photo, ['alt'=>$model->judul_ads, 'class'=>'img-thumbnail', 'width'=>'350px']);
                }
            ],
            'posisi',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model){
                    switch ($model->status):
                        case 0:
                            $status = 'Tidak Tampil';
                            break;
                        case 1:
                            $status = '<span class="text-success"><strong>Tampil</strong></span>';
                            break;
                        default:
                            $status = 'Hapus';
                            break;
                    endswitch;

                    return $status;
                },
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
