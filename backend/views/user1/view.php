<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User1 */

//$this->title = $model->id;
$this->title = "馆员信息";
$this->params['breadcrumbs'][] = ['label' => '馆员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="user1-view">

    <p>
        <?= Html::a('<i class="fa fa-edit"></i> 修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fa fa-trash-o"></i> 删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '删除本条记录，确定?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            'created_at:datetime',
            'updated_at:datetime',
            //'verification_token',
            'mobile',
            //'library_id',
            [
                'label' => '分配至图书馆',
                'value' => $model->getLibrary($model),
                'format'=> 'html',
            ],
            'pid',
        ],
    ]) ?>

</div>
