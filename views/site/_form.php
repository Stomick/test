<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(['id' => 'contacts']); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div id="contacts-number" class="hidden">
            <div class="row">
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Contacts[numbers][]"
                           maxlength="18" aria-required="true" aria-invalid="false">
                    <div class="help-block"></div>
                </div>
                <a class="btn-danger btn" onclick="jQuery(this).parent().remove()">Удалить</a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="button" id="addNumber" class="btn btn-info" value="Добавить номер"/>
        <br/>
    </div>
    <div class="form-group field-contacts-number required has-success">
        <label class="control-label">Номера</label>
        <div id="newnumbers">
            <?php if (count($model->numbers)) {
                foreach ($model->numbers as $k => $number) { ?>
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="text" id="contacts-<?= $k ?>" class="form-control" name="Contacts[numbers][]"
                                   value="<?= $number ?>" maxlength="18" required aria-required="true" aria-invalid="false">
                            <div class="help-block"></div>
                        </div>
                        <a class="btn-danger btn" onclick="jQuery(this).parent().remove()">Удалить</a>
                    </div>
                <?php }
            } ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
