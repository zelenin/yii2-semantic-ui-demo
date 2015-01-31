<?php
/**
 * @var View $this
 */

use app\modules\demo\widgets\Example;
use yii\web\View;
use Zelenin\yii\SemanticUI\Elements;
use Zelenin\yii\SemanticUI\modules\Rating;

$this->title = 'Rating';

Elements::header($this->title);
?>

<?= Example::widget([
    'demo' => Rating::widget([
        'options' => [
            'data' => [
                'rating' => 3,
                'max-rating' => 5
            ]
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Rating;
echo Rating::widget([
    'options' => [
        'data' => [
            'rating' => 3,
            'max-rating' => 5
        ]
    ]
]);
PHP
]) ?>

<?= Example::widget([
    'demo' => Rating::widget([
        'type' => Rating::TYPE_HEART,
        'clientOptions' => [
            'initialRating' => 5,
            'maxRating' => 10
        ]
    ]),
    'code' => <<<PHP
use Zelenin\yii\SemanticUI\modules\Rating;
echo Rating::widget([
    'type' => Rating::TYPE_HEART,
    'clientOptions' => [
        'initialRating' => 5,
        'maxRating' => 10
    ]
]);
PHP
]) ?>
