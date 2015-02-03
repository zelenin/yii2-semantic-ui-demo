<?php
/**
 * @var Model $model
 */

use app\modules\demo\models\Model;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\widgets\DetailView;

$this->title = 'DetailView';

echo Elements::header($this->title);

echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'total'
    ]
]);
