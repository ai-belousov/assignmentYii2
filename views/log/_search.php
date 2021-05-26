<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\LogSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?//= $form->field($model, 'data_time') ?>
    <?

    echo $form->field($model, 'data')->widget(DateTimePicker::className(),[
        'name' => 'data',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты/времени...'],
        'convertFormat' => true,
        // 'value'=> date("d.m.Y h:i",$model->data_time),
        'pluginOptions' => [
            'format' => 'dd-MM-yyyy',
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => '01.05.2020', //самая ранняя возможная дата
            'todayBtn'=>true, //снизу кнопка "сегодня"
            // 'disabledHours' => true
        ],
    ]);
    ?>


    <?php 
        $dataList = ArrayHelper::map(
        \app\models\Log::find()->select(['os'])->groupBy(['os'])->all(),
        'os',
        'os',
    ); ?>
    <?= $form->field($model, 'os')->dropDownList(array_merge(array(''=>'Системы'), $dataList)); ?> 

    <?= $form->field($model, 'cpu_x64')
        ->dropDownList([
            '' => 'Разрядность',
            '0' => 'x32',
            '1' => 'x64',
        ]); 
    ?>
    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
