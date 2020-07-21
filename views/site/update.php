<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = 'Редактирование контакта "' . $model->firstname . ' ' . $model->lastname . '"';
$this->params['breadcrumbs'][] = ['label' => 'Контакты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="contacts-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
