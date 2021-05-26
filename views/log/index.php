<?php

use yii\helpers\{Html, ArrayHelper};
use yii\grid\GridView;
use yii\widgets\Pjax;
use dosamigos\chartjs\ChartJs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $log = ArrayHelper::toArray($dataProvider->getModels(),['app\models\Log' => ['data','count','browser']]);?>
    <pre>
<? 
    //  $this->render('my_other_view', [
    //     'searchModel' => $searchModel,
    //     'dataProvider' => $dataProvider,
    // ]);
   // var_dump($dataProvider);?>
</pre>
    <?= ChartJs::widget([
        'type' => 'line',
        'options' => [
            'height' => 100,
            // 'width' => '100%'
        ],
        'data' => [
            'labels' => array_column($log,'data'),
            'datasets' => [
                [
                    'label' => "По оси X – даты, по оси Y – число запросов",
                    'backgroundColor' => "rgba(179,181,198,0.2)",
                    'borderColor' => "rgba(179,181,198,1)",
                    'pointBackgroundColor' => "rgba(179,181,198,1)",
                    'pointBorderColor' => "#fff",
                    'pointHoverBackgroundColor' => "#fff",
                    'pointHoverBorderColor' => "rgba(179,181,198,1)",
                    'data' => array_column($log,'count')
                ],
//                 [
//                     'label' => "По оси X – даты, по оси Y – доля (% от числа запросов) для трех самых популярных
// браузеров",
//                     'backgroundColor' => "rgba(255,99,132,0.2)",
//                     'borderColor' => "rgba(255,99,132,1)",
//                     'pointBackgroundColor' => "rgba(255,99,132,1)",
//                     'pointBorderColor' => "#fff",
//                     'pointHoverBackgroundColor' => "#fff",
//                     'pointHoverBorderColor' => "rgba(255,99,132,1)",
//                     'data' => [5028, 10000, 7040, 5019, 10096, 2027, 1000]
//                 ]
            ]
        ]
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => null, //null,//$searchModel
        // 'filter' => null,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'data',
            'count',
            'url:ntext',
            'browser',
        ],
    ]); ?>

    <?php print_r($log)?>
    <?php //var_dump( $log['data'])?>

    <?php Pjax::end(); ?>

</div>
