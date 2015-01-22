<?php
/**
 * @var ArrayDataProvider $dataProvider
 */

use yii\data\ArrayDataProvider;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\GridView;

$this->title = 'GridView';

echo Elements::header($this->title);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => ['class' => 'ui celled striped table'],
    'columns' => [
        [
            'attribute' => 'id'
        ],
        [
            'attribute' => 'name'
        ],
        [
            'attribute' => 'total'
        ]
    ]
]);
