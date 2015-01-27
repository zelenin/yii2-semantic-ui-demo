<?php
/**
 * @var ArrayDataProvider $dataProvider
 * @var Model $searchModel
 */

use app\modules\demo\models\Model;
use yii\data\ArrayDataProvider;
use yii\widgets\Pjax;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\GridView;

$this->title = 'GridView';

echo Elements::header($this->title);

$pjax = Pjax::begin();

echo GridView::widget([
    'filterModel' => $searchModel,
    'dataProvider' => $dataProvider,
    'tableOptions' => ['class' => 'ui celled striped blue table'],
    'columns' => [
        [
            'class' => 'Zelenin\yii\SemanticUI\CheckboxColumn',
        ],
        [
            'attribute' => 'id'
        ],
        [
            'attribute' => 'name',
            'filter' => array_merge($searchModel::getTitleList(), ['' => ''])
        ],
        [
            'attribute' => 'total'
        ]
    ]
]);

$pjax::end();
