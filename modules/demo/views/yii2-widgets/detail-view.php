<?php
/**
 * @var Model $model
 */

use app\modules\demo\models\Model;
use Zelenin\yii\SemanticUI\Elements;

$this->title = 'DetailView';

echo Elements::header($this->title);

echo \Zelenin\yii\SemanticUI\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'name',
        'total'
    ]
]);
